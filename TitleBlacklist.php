<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	exit(1);
}

$wgExtensionCredits['other'][] = array(
	'name' => 'Title Blacklist',
	'author' => 'VasilievVV',
	'version' => '1.4',
	'url' => 'http://www.mediawiki.org/wiki/Extension:Title_Blacklist',
	'description' => 'Allows to forbide creation of pages with specified titles'
);

$wgExtensionMessagesFiles['TitleBlacklist'] = dirname( __FILE__ ) . '/TitleBlacklist.i18n.php';
$wgAutoloadClasses['TitleBlacklist']      = dirname( __FILE__ ) . '/TitleBlacklist.list.php';
$wgAutoloadClasses['TitleBlacklistHooks'] = dirname( __FILE__ ) . '/TitleBlacklist.hooks.php';

$wgExtensionFunctions[] = 'efInitTitleBlacklist';

// Sources of TitleBlacklist
define( 'TBLSRC_MSG',       0 );	//For internal usage
define( 'TBLSRC_LOCALPAGE', 1 );	//Local wiki page
define( 'TBLSRC_URL',	    2 );	//Load blacklist from URL
define( 'TBLSRC_FILE',      3 );	//Load from file
$wgTitleBlacklistSources = array();

$wgTitleBlacklistCaching = array(
	'warningchance' => 100,
	'expiry' => 900,
	'warningexpiry' => 600,
);

$wgAvailableRights[] = 'tboverride';
$wgGroupPermissions['sysop']['tboverride'] = true;

function efInitTitleBlacklist() {
	global $wgTitleBlacklist;
	$wgTitleBlacklist = new TitleBlacklist();
	wfLoadExtensionMessages( 'TitleBlacklist' );
	efSetupTitleBlacklistHooks();
}

function efSetupTitleBlacklistHooks() {
	global $wgHooks;
	$wgHooks['getUserPermissionsErrors'][]   = 'TitleBlacklistHooks::userCan';
	$wgHooks['AbortMove'][] = 'TitleBlacklistHooks::abortMove';
	$wgHooks['UploadVerification'][] = 'TitleBlacklistHooks::verifyUpload';
	$wgHooks['EditFilter'][] = 'TitleBlacklistHooks::validateBlacklist';
}
