<?php
/**
 * Test the TitleBlacklist API.
 *
 * This wants to run with phpunit.php, like so:
 * cd $IP/tests/phpunit
 * php phpunit.php ../../extensions/TitleBlacklist/tests/ApiQueryTitleBlacklistTest.php
 *
 * The blacklist file is `testSource` and shared by all tests.
 *
 * Ian Baker <ian@wikimedia.org>
 */

ini_set( 'include_path', ini_get('include_path') . ':' . __DIR__ . '/../../../tests/phpunit/includes/api' );

class ApiQueryTitleBlacklistTest extends ApiTestCase {

	function setUp() {
		global $wgTitleBlacklistSources, $wgGroupPermissions;
		parent::setUp();
		$this->doLogin();

		$wgTitleBlacklistSources = array(
		    array(
		         'type' => TBLSRC_FILE,
		         'src'  => __DIR__ . '/testSource',
		    ),
		);

		// without this, blacklist applies only to anonymous users.
		$wgGroupPermissions['sysop']['tboverride'] = false;
	}

	/**
	 * Verify we allow a title which is not in the blacklist
	 */
	function testCheckingUnlistedTitle() {
		$unlisted = $this->doApiRequest( array(
			'action' => 'titleblacklist',
			'tbtitle' => 'foo',
			'tbaction' => 'create',
		) );

		$this->assertEquals(
			'ok',
			$unlisted[0]['titleblacklist']['result'],
			'Unlisted title returns ok'
		);
	}

	/**
	 * Verify a blacklisted title give out an error.
	 */
	function testCheckingBlackListedTitle() {
		$listed = $this->doApiRequest( array(
			'action' => 'titleblacklist',
			'tbtitle' => 'bar',
			'tbaction' => 'create',
		) );

		$this->assertEquals(
			'blacklisted',
			$listed[0]['titleblacklist']['result'],
			'Listed title returns error'
		);
		$this->assertEquals(
			"The title \"bar\" has been banned from creation.\nIt matches the following blacklist entry: <code>[Bb]ar #example blacklist entry</code>",
			$listed[0]['titleblacklist']['reason'],
			'Listed title error text is as expected'
		);

		$this->assertEquals(
			"titleblacklist-forbidden-edit",
			$listed[0]['titleblacklist']['message'],
			'Correct blacklist message name is returned'
		);

		$this->assertEquals(
			"[Bb]ar #example blacklist entry",
			$listed[0]['titleblacklist']['line'],
			'Correct blacklist line is returned'
		);

	}
}
