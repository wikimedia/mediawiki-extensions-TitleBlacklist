<?php

/**
 * Hooks for Title Blacklist
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author VasilievVV
 * @copyright © 2007 VasilievVV
 * @licence GNU General Public Licence 2.0 or later
 */
 
class TitleBlacklistHooks {
	public static function userCan( $title, $user, $action, &$result )
	{
		global $wgTitleBlacklist;
		if ( $action != 'create' && $action != 'edit' ) {
			$result = true;
			return $result;
		}
		$blacklisted = $wgTitleBlacklist->isBlacklisted( $title, $action );
		if( is_string( $blacklisted ) ) {
			//return wfMsgWikiHtml( "titleblacklist-forbidden-edit", htmlspecialchars( $blacklisted ), $title->getFullText() );
			return $result = false;
		}

		return $result = true;
	}

	public static function abortMove( $old, $nt, $user, &$err ) {
		global $wgTitleBlacklist;
		$blacklisted = $wgTitleBlacklist->isBlacklisted( $nt, 'move' );
		if( is_string( $blacklisted ) ) {
			$err = wfMsgWikiHtml( "titleblacklist-forbidden-move", htmlspecialchars( $blacklisted ), $nt->getFullText(), $old->getFullText() );
			return false;
		}
		return true;
	}
	
	public static function verifyUpload( $fname, $fpath, &$err ) {
		global $wgTitleBlacklist, $wgUser;
		$blacklisted = $wgTitleBlacklist->isBlacklisted( $fname, 'upload' );
		if( is_string( $blacklisted ) ) {
			$err = wfMsgWikiHtml( "titleblacklist-forbidden-upload", htmlspecialchars( $blacklisted ), $fname );
			return false;
		}
		return true;
	}
}