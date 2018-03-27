<?php

////////////////////////////////////////////////////////////////////////////////
//Author: Olubunmi Tosin
//Email: olubunmivictor6@gmail.com
//
////////////////////////////////////////////////////////////////////////////////


/*
 * Include the robo file so we know what port
 * the built in php server is running on.
 */
require(__DIR__.'/../RoboFile.php');

/*
 * Create the base Guzzle Client we will use for all our acceptance testing.
 * NOTE: We return a new client each time so that we don't have any chance of
 * cross contamination.
 */
function GuzzleTester()
{
	return new GuzzleHttp\Client
	([
		'base_url' => 'http://127.0.0.1:'.RoboFile::$serverPort,
		'defaults' => ['cookies' => true]
	]);
}
