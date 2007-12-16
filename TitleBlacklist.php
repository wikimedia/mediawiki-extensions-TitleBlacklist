<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	exit(1);
}

$wgExtensionCredits['other'][] = array(
	'name' => 'Title Blacklist',
	'author' => 'VasilievVV',
	'description' => 'Allows to forbide creation of pages with specified titles'
);

$wgAutoloadClasses['TitleBlacklist']      = dirname( __FILE__ ) . '/TitleBlacklist.list.php';
$wgAutoloadClasses['TitleBlacklistHooks'] = dirname( __FILE__ ) . '/TitleBlacklist.hooks.php';

$wgExtensionFunctions[] = 'efInitTitleBlacklist';

// Sources of TitleBlacklist
define( 'TBLSRC_MSG',       0 );	//For internal usage
define( 'TBLSRC_LOCALPAGE', 1 );	//Local wiki page
define( 'TBLSRC_URL',	      2 );	//Load blacklist from URL
define( 'TBLSRC_FILE',      3 );	//Load from file
$wgTitleBlacklistSources = array();

$wgAvailableRights[] = 'tboverride';
$wgGroupPermissions['sysop']['tboverride'] = true;

function efInitTitleBlacklist() {
	global $wgTitleBlacklist;
	$wgTitleBlacklist = new TitleBlacklist();
	efSetupTitleBlacklistMessages();
	efSetupTitleBlacklistHooks();
}

function efSetupTitleBlacklistMessages() {
	global $wgMessageCache;
	require_once( 'TitleBlacklist.i18n.php' );
	foreach( efGetTitleBlacklistMessages() as $lang => $messages ) {
		$wgMessageCache->addMessages( $messages, $lang );
	}
}

function efSetupTitleBlacklistHooks() {
	global $wgHooks;
	$wgHooks['getUserPermissionsErrors'][]   = 'TitleBlacklistHooks::userCan';
	$wgHooks['AbortMove'][] = 'TitleBlacklistHooks::abortMove';
	$wgHooks['UploadVerification'][] = 'TitleBlacklistHooks::verifyUpload';
}