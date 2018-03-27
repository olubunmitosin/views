<?php

////////////////////////////////////////////////////////////////////////////////
//Author: Olubunmi Tosin
//Email: olubunmivictor6@gmail.com
//
////////////////////////////////////////////////////////////////////////////////

class ViewTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Property: $http
	 * =========================================================================
	 * We store an instance of GuzzleHttp\Client here.
	 */
	protected $http;

	/**
	 * Method: setUp
	 * =========================================================================
	 * This is run before our tests. It creates the above properties.
	 *
	 * Parameters:
	 * -------------------------------------------------------------------------
	 * n/a
	 *
	 * Returns:
	 * -------------------------------------------------------------------------
	 * void
	 */
	protected function setUp()
	{
		// Get a new guzzle client
		$this->http = GuzzleTester();
	}

	/**
	 * Method: testDefaultView
	 * =========================================================================
	 * This test simply checks to make sure the basics are working.
	 * Please see ./tests/environment/index.php for it's counterpart.
	 *
	 * Parameters:
	 * -------------------------------------------------------------------------
	 * n/a
	 *
	 * Returns:
	 * -------------------------------------------------------------------------
	 * void
	 */
	public function testDefaultView()
	{
		$this->assertEquals
		(
			'Hello Mike',
			$this->http->get('/index.php')->getBody()
		);
	}

	/**
	 * Method: testGlobaliseView
	 * =========================================================================
	 * Checks to make sure the globalise functionality works as expected.
	 * Please see ./tests/environment/globalise.php for it's counterpart.
	 *
	 * Parameters:
	 * -------------------------------------------------------------------------
	 * n/a
	 *
	 * Returns:
	 * -------------------------------------------------------------------------
	 * void
	 */
	public function testGlobaliseView()
	{
		$this->assertEquals
		(
			'This is the globalise test - example',
			$this->http->get('/globalise.php')->getBody()
		);
	}
}
