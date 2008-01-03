<?php

/**
 * Title Blacklist class
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author VasilievVV
 * @copyright © 2007 VasilievVV
 * @licence GNU General Public Licence 2.0 or later
 */
class TitleBlacklist {
	private $mBlacklist = null;
	const VERSION = 1;	//Blacklist format

	public function load() {
		global $wgTitleBlacklistSources, $wgMemc, $wgTitleBlacklistCaching;
		//Try to find something in the cache
		$cachedBlacklist = $wgMemc->get( wfMemcKey( "title_blacklist_entries" ) );
		if( is_array( $cachedBlacklist ) && count( $cachedBlacklist ) > 1 && ( $cachedBlacklist[0]->getFormatVersion() != self::VERSION ) ) {
			
			$this->mBlacklist = $cachedBlacklist;
			return;
		}

		$sources = $wgTitleBlacklistSources;
		$sources[] = array( 'type' => TBLSRC_MSG );
		$this->mBlacklist = array();
		foreach( $sources as $source ) {
			$this->mBlacklist = array_merge( $this->mBlacklist, $this->parseBlacklist( $this->getBlacklistText( $source ) ) );
		}
		$wgMemc->set( wfMemcKey( "title_blacklist_entries" ), $this->mBlacklist, $wgTitleBlacklistCaching['expiry'] );
	}
	
	public function getBlacklistText( $source ) {
		if( !is_array( $source ) || count( $source ) <= 0 ) {
			return '';	//Return empty string in error case
		}

		if( $source['type'] == TBLSRC_MSG ) {
			return wfMsgForContent( 'titleblacklist' );
		} elseif( $source['type'] == TBLSRC_LOCALPAGE && count( $source ) >= 2 ) {
			$title = Title::newFromText( $source['src'] );
			if( is_null( $title ) ) {
				return '';
			}
			if( $title->getNamespace() == NS_MEDIAWIKI ) {	//Use wfMsgForContent() for getting messages
				$msg = wfMsgForContent( $title->getText() );
				if( !wfEmptyMsg( 'titleblacklist', $msg ) ) {
					return $msg;
				} else {
					return '';
				}
			} else {
				$article = new Article( $title );
				if( $article->exists() ) {
					$article->followRedirect();
					return $article->getContent();
				}
			}
		} elseif( $source['type'] == TBLSRC_URL && count( $source ) >= 2 ) {
			return $this->getHttp( $source['src'] );
		} elseif( $source['type'] == TBLSRC_FILE && count( $source ) >= 2 ) {
			if( file_exists( $source['src'] ) ) {
				return file_get_contents( $source['src'] );
			} else {
				return '';
			}
		}

		return '';
	}
	
	public function parseBlacklist( $list ) {
		$lines = preg_split( "/\r?\n/", $list );
		$result = array();
		foreach ( $lines as $line )
		{
			$line = TitleBlacklistEntry :: newFromString( $line );
			if ( $line ) {
				$result[] = $line;
			}
		}

		return $result;
	}

	public function isBlacklisted( $title, $action = 'edit' ) {
		global $wgUser;
		if( !($title instanceof Title) ) {
			$title = Title::newFromString( $title );
		}
		$blacklist = $this->getBlacklist();
		foreach ( $blacklist as $item ) {
			if( !$item->userCan( $title, $wgUser, $action ) ) {
				return $item;
			}
		}
		return false;
	}
	
	public function getBlacklist() {
		if( is_null( $this->mBlacklist ) ) {
			$this->load();
		}
		return $this->mBlacklist;
	}
	
	public function getHttp( $url ) {
		global $messageMemc, $wgTitleBlacklistCaching;
		$key = "title_blacklist_source:" . md5( $url ); // Global shared
		$warnkey = wfMemcKey( "titleblacklistwarning", md5( $url ) );
		$result = $messageMemc->get( $key );
		$warn = $messageMemc->get( $warnkey );
		if ( !is_string( $result ) || ( !$warn && !mt_rand( 0, $wgTitleBlacklistCaching['warningchance'] ) ) ) {
			$result = Http::get( $url );
			$messageMemc->set( $warnkey, 1, $wgTitleBlacklistCaching['warningexpiry'] );
			$messageMemc->set( $key, $result, $wgTitleBlacklistCaching['expiry'] );
		}
		return $result;
	}
	
	public function invalidate() {
		global $wgMemc;
		$wgMemc->delete( wfMemcKey( "title_blacklist_entries" ) );
	}
	
	public function validate( $blacklist ) {
		$badEntries = array();
		foreach( $blacklist as $e ) {
			wfSuppressWarnings();
			$regex = $e->getRegex();
			if( preg_match( "/{$regex}/u", '' ) === false )
				$badEntries[] = $e->getRaw();
			wfRestoreWarnings();
		}
		return $badEntries;
	}
}

class TitleBlacklistEntry {
	private
		$mRaw,
		$mRegex,
		$mParams,
		$mFormatVersion;

	public function __construct( $regex, $params, $raw ) {
		$this->mRaw = $raw;
		$this->mRegex = $regex;
		$this->mParams = $params;
	}

	public function userCan( $title, $user, $action ) {
		if( $user->isAllowed( 'tboverride' ) ) {
			return true;
		}
		wfSuppressWarnings();
		$match = preg_match( "/^{$this->mRegex}$/us" . ( isset( $this->mParams['casesensitive'] ) ? '' : 'i' ), $title->getFullText() );
		wfRestoreWarnings();
		if( $match ) {
			if( isset( $this->mParams['autoconfirmed'] ) && $user->isAllowed( 'autoconfirmed' ) ) {
				return true;
			}
			if( !isset( $this->mParams['noedit'] ) && $action == 'edit' ) {
				return true;
			}
			return false;
		}
		return true;
	}

	public static function newFromString( $line ) {
		$raw = $line; // Keep line for raw data
		$regex = "";
		$options = array();
		// Strip comments
		$line = preg_replace( "/^\\s*([^#]*)\\s*((.*)?)$/", "\\1", $line );
		$line = trim( $line );
		// Parse the rest of message
		preg_match( '/^(.*?)(\s*<(.*)>)?$/', $line, $pockets );
		@list( $full, $regex, $null, $opts_str ) = $pockets;
		$regex = trim( $regex );
		$regex = str_replace( '_', ' ', $regex ); // We'll be matching against text form
		$opts_str = trim( $opts_str );
		// Parse opts
		$opts = preg_split( '/\s*\|\s*/', $opts_str );
		foreach( $opts as $opt ) {
			$opt2 = strtolower( $opt );
			if( $opt2 == 'autoconfirmed' ) {
				$options['autoconfirmed'] = true;
			}
			if( $opt2 == 'noedit' ) {
				$options['noedit'] = true;
			}
			if( $opt2 == 'casesensitive' ) {
				$options['casesensitive'] = true;
			}
			if( preg_match( '/errmsg\s*=\s*(.+)/i', $opt, $matches ) ) {
				$options['errmsg'] = $matches[1];
			}
		}
		// Process magic words
		preg_match_all( '/{{\s*([a-z]+)\s*:\s*(.+?)\s*}}/', $regex, $magicwords, PREG_SET_ORDER );
		foreach( $magicwords as $mword ) {
			global $wgParser;	// Functions we're calling don't need, nevertheless let's use it
			switch( strtolower( $mword[1] ) ) {
				case 'ns':
					$cpf_result = CoreParserFunctions::ns( $wgParser, $mword[2] );
					if( is_string( $cpf_result ) ) {
						$regex = str_replace( $mword[0], $cpf_result, $regex );	// All result will have the same value, so we can just use str_seplace()
					}
					break;
				case 'int':
					$cpf_result = wfMsgForContent( $mword[2] );
					if( is_string( $cpf_result ) ) {
						$regex = str_replace( $mword[0], $cpf_result, $regex );
					}
			}
		}
		// Return result
		if( $regex ) {
			return new TitleBlacklistEntry( $regex, $options, $raw );
		} else {
			return null;
		}
	}
	
	public function getRegex() {
		return $this->mRegex;
	}

	public function getRaw() {
		return $this->mRaw;
	}

	public function getOptions() {
		return $this->mOptions;
	}

	public function getCustomMessage() {
		return isset( $this->mParams['errmsg'] ) ? $this->mParams['errmsg'] : null;
	}
	
	public function getFormatVersion() { return $this->mFormatVersion; }
	public function setFormatVersion( $v ) { $this->mFormatVersion = $v; }
}