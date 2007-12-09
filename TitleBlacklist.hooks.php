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
		if ( ( $action != 'create' && $action != 'upload' ) || $user->isAllowed('tboverride') ) {
			$result = true;
			return $result;
		}
		$blacklisted = $wgTitleBlacklist->isBlacklisted( $title );
		if( is_string( $blacklisted ) ) {
			return wfMsgWikiHtml( "titleblacklist-forbidden-edit", $blacklisted, $title->getFullText() );
		}

		$result = true;
		return $result;
	}

	public static function abortMove( $old, $nt, $user, &$err ) {
		global $wgTitleBlacklist;
		$blacklisted = $wgTitleBlacklist->isBlacklisted( $nt );
		if( !$user->isAllowed( 'tboverride' ) && is_string( $blacklisted ) ) {
			$err = wfMsgWikiHtml( "titleblacklist-forbidden-move", $blacklisted, $nt->getFullText(), $old->getFullText() );
			return false;
		}
		return true;
	}
	
	public static function verifyUpload( $fname, $fpath, &$err ) {
		global $wgTitleBlacklist, $wgUser;
		$blacklisted = $wgTitleBlacklist->isBlacklisted( $fname );
		if( !$wgUser->isAllowed( 'tboverride' ) && is_string( $blacklisted ) ) {
			$err = wfMsgWikiHtml( "titleblacklist-forbidden-upload", $blacklisted, $fname );
			return false;
		}
		return true;
	}
}