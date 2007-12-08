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
		$this->mBlacklist = $this->parseBlacklist( $this->getBlacklistText() );
	}
	
	public function getBlacklistText() {
		return wfMsgForContent( 'titleblacklist' );
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