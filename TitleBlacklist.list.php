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
		$sources[] = array( TBLSRC_MSG );
		$this->mBlacklist = array();
		foreach( $sources as $source ) {
			$this->mBlacklist = array_merge( $this->mBlacklist, $this->parseBlacklist( $this->getBlacklistText( $source ) ) );
		}
	}
	
	public function getBlacklistText( $source ) {
		if( !is_array( $source ) || count( $source ) <= 0 ) {
			return '';	//Return empty string in error case
		}

		if( $source[0] == TBLSRC_MSG ) {
			return wfMsgForContent( 'titleblacklist' );
		} elseif( $source[0] == TBLSRC_LOCALPAGE && count( $source ) >= 2 ) {
			$title = Title::newFromText( $source[1] );
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
		} elseif( $source[0] == TBLSRC_URL && count( $source ) >= 2 ) {
			return Http::get( $source[1] );
		} elseif( $source[0] == TBLSRC_FILE && count( $source ) >= 2 ) {
			if( file_exists( $source[1] ) ) {
				return file_get_contents( $source[1] );
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
			$line = preg_replace( "/^\\s*([^#]*)\\s*((.*)?)$/", "\\1", $line );
			$line = trim( $line );
			if ($line) $result[] = $line;
		}

		return $result;
	}

	public function isBlacklisted( $title ) {
		if( $title instanceof Title ) {
			$title = $title->getFullText();
		}
		$blacklist = $this->getBlacklist();
		foreach ( $blacklist as $item ) {
			if( preg_match( "/^$item$/is", $title ) ) {
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
}