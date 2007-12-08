<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	exit(1);
}

$wgExtensionCredits['other'][] = array(
	'name' => 'Title Blacklist',
	'author' => 'VasilievVV',
	'description' => 'Allows to forbide creation of pages with specified titles'
);

$wgExtensionFunctions[] = 'efSetupTitleBlacklistMessages';
$wgHooks['userCan'][] = 'efUserCanCreateTitle';
$wgHooks['AbortMove'][] = 'efTitleBlacklistCanMove';

$wgAvailableRights[] = 'tboverride';
$wgGroupPermissions['sysop']['tboverride'] = true;

function efSetupTitleBlacklistMessages() {
	global $wgMessageCache;
	require_once( 'TitleBlacklist.i18n.php' );
	foreach( efGetTitleBlacklistMessages() as $lang => $messages ) {
		$wgMessageCache->addMessages( $messages, $lang );
	}
}

function efGetTitleBlacklist() {
	return wfMsgForContent( 'titleblacklist' );
}

function efParseTitleBlacklist( $list ) {
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

function efIsBlacklistedTitle( $title ) {
	if( $title instanceof Title ) {
		$title = $title->getFullText();
	}
	$blacklist = efParseTitleBlacklist( efGetTitleBlacklist() );
	foreach ( $blacklist as $item ) {
		if( preg_match( "/^$item$/is", $title ) ) {
			return $item;
		}
	}
	return false;
}

function efUserCanCreateTitle( $title, $user, $action, &$result )
{
	if ( $action != 'create' || $user->isAllowed('tboverride') ) {
		$result = true;
		return $result;
	}
	$blacklisted = efIsBlacklistedTitle( $title );
	if( is_string( $blacklisted ) ) {
		return wfMsgWikiHtml( "titleblacklist-forbidden", $blacklisted, $title->getFullText() );
	}

	$result = true;
	return $result;
}

function efTitleBlacklistCanMove( $old, $nt, $user, &$err ) {
	$blacklisted = efIsBlacklistedTitle( $nt );
	if( !$user->isAllowed( 'tboverride' ) && is_string( $blacklisted ) ) {
		$err = wfMsgWikiHtml( "titleblacklist-forbidden-move", $blacklisted, $nt->getFullText(), $old->getFullText() );
		return false;
	}
	return true;
}