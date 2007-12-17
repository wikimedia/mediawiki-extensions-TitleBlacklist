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
		if( $blacklisted instanceof TitleBlacklistEntry ) {
			$message = $blacklisted->getCustomMessage();
			if( is_null( $message ) )
				$message = 'titleblacklist-forbidden-edit';
			$result = array( $message, htmlspecialchars( $blacklisted->getRaw() ), $title->getFullText() );
			return false;
		}

		return $result = true;
	}

	public static function abortMove( $old, $nt, $user, &$err ) {
		global $wgTitleBlacklist;
		$blacklisted = $wgTitleBlacklist->isBlacklisted( $nt, 'move' );
		if( !$blacklisted )
			$blacklisted = $wgTitleBlacklist->isBlacklisted( $old, 'edit' );
		if( $blacklisted instanceof TitleBlacklistEntry ) {
			$message = $blacklisted->getCustomMessage();
			if( is_null( $message ) )
				$message = 'titleblacklist-forbidden-move';
			$err = wfMsgWikiHtml( $message, htmlspecialchars( $blacklisted->getRaw() ), $nt->getFullText(), $old->getFullText() );
			return false;
		}
		return true;
	}
	
	public static function verifyUpload( $fname, $fpath, &$err ) {
		global $wgTitleBlacklist, $wgUser;
		$blacklisted = $wgTitleBlacklist->isBlacklisted( Title::newFromText( $fname, NS_IMAGE ), 'upload' );
		if( $blacklisted instanceof TitleBlacklistEntry ) {
			$message = $blacklisted->getCustomMessage();
			if( is_null( $message ) )
				$message = 'titleblacklist-forbidden-upload';
			$err = wfMsgWikiHtml( $message, htmlspecialchars( $blacklisted->getRaw() ), $fname );
			return false;
		}
		return true;
	}
}