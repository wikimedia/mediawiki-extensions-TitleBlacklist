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

	public function load() {
		global $wgTitleBlacklistSources;
		$sources = $wgTitleBlacklistSources;
		$sources[] = array( 'type' => TBLSRC_MSG );
		$this->mBlacklist = array();
		foreach( $sources as $source ) {
			$this->mBlacklist = array_merge( $this->mBlacklist, $this->parseBlacklist( $this->getBlacklistText( $source ) ) );
		}
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
			return Http::get( $source['src'] );
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
			if( $item->userCan( $title, $wgUser, $action ) ) {
				return $item->getRaw();
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
}

class TitleBlacklistEntry {
	private
		$mRaw,
		$mRegex,
		$mParams;

	public function __construct( $regex, $params, $raw ) {
		$this->mRaw = $raw;
		$this->mRegex = $regex;
		$this->mParams = $params;
	}

	public function userCan( $title, $user, $action ) {
		if( $user->isAllowed( 'tboverride' ) ) {
			return true;
		}
		if( preg_match( "/^{$this->mRegex}$/is", $title->getFullText() ) ) {
			if( isset( $this->mParams['autoconfirmed'] ) && $user->isAllowed( 'autoconfirmed' ) ) {
				return false;
			}
			if( !isset( $this->mParams['noedit'] ) && $action == 'edit' ) {
				return false;
			}
			return true;
		}
		return false;
	}

	public static function newFromString( $line ) {
		$raw = $line;	#Keep line for raw data
		$regex = "";
		$options = array();
		//Strip comments
		$line = preg_replace( "/^\\s*([^#]*)\\s*((.*)?)$/", "\\1", $line );
		$line = trim( $line );
		//Parse the rest of message
		preg_match( '/^(.*?)(\s*<(.*)>)?$/', $line, $pockets );
		@list( $full, $regex, $null, $opts_str ) = $pockets;
		$regex = trim( $regex );
		$opts_str = trim( $opts_str );
		//Parse opts
		$opts = preg_split( '/\s*\|\s*/', $opts_str );
		foreach( $opts as $opt ) {
			if( $opt == 'autoconfirmed' ) {
				$options['autoconfirmed'] = true;
			}
			if( $opt == 'noedit' ) {
				$options['noedit'] = true;
			}
		}
		//Return result
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
}