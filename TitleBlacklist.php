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
	global $wgMessageCache;
	return $wgMessageCache->get("titleblacklist");
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

function efUserCanCreateTitle( $title, $user, $action, &$result )
{
	if ( $action != 'create' && $action != 'move' )
	{
		$result = true;
		return $result;
	}
	$blacklist = efParseTitleBlacklist( efGetTitleBlacklist() );
	foreach ( $blacklist as $item )
	{
		if( preg_match( "/^$item$/is", $title->getText() ) && !$user->isAllowed('tboverride')) {
			$result = false;
			return wfMsgWikiHtml( "titleblacklist-forbidden", $item );
		}
	}

	$result = true;
	return $result;
}
