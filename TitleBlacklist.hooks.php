<?php

/**
 * Hooks for Title Blacklist
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author VasilievVV
 * @copyright © 2007 VasilievVV
 * @license GNU General Public License 2.0 or later
 */
 
class TitleBlacklistHooks {
	public static function userCan( $title, $user, $action, &$result ) {
		global $wgTitleBlacklist;
		if( $action == 'create' || $action == 'edit' ) {
			$blacklisted = $wgTitleBlacklist->isBlacklisted( $title, $action );
			if( $blacklisted instanceof TitleBlacklistEntry ) {
				$message = $blacklisted->getCustomMessage();
				if( is_null( $message ) )
					$message = 'titleblacklist-forbidden-edit';
				$result = array( $message,
					htmlspecialchars( $blacklisted->getRaw() ),
					$title->getFullText() );
				return false;
			}
		}
		return true;
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
			$err = wfMsgWikiHtml( $message,
				htmlspecialchars( $blacklisted->getRaw() ),
				htmlspecialchars( $nt->getFullText() ),
				htmlspecialchars( $old->getFullText() ) );
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
	
	public static function validateBlacklist( $editor, $text, $section, $error ) {
		global $wgTitleBlacklist;
		$title = $editor->mTitle;
		if( $title->getNamespace() != NS_MEDIAWIKI || $title->getDbKey() != 'Titleblacklist' )
			return true;

		$bl = $wgTitleBlacklist->parseBlacklist( $text );
		$ok = $wgTitleBlacklist->validate( $bl );
		if( count( $ok ) == 0 ) {
			return true;
		}

		$errmsg = wfMsgExt( 'titleblacklist-invalid', array( 'parsemag' ), count( $ok ) );
		$errlines = '* <tt>' . implode( "</tt>\n* <tt>", array_map( 'wfEscapeWikiText', $ok ) ) . '</tt>';
		$error = '<div class="errorbox">' .
			$errmsg .
			"\n" .
			$errlines .
			"</div>\n" .
			"<br clear='all' />\n";
		
		// $error will be displayed by the edit class
		return true;
	}
	
	public static function clearBlacklist( &$article, &$user,
			$text, $summary, $isminor, $iswatch, $section ) {
		$title = $article->getTitle();
		if( $title->getNamespace() == NS_MEDIAWIKI && $title->getDbKey() == 'Titleblacklist' ) {
			global $wgTitleBlacklist;
			$wgTitleBlacklist->invalidate();
		}
		return true;
	}
}