<?php

////////////////////////////////////////////////////////////////////////////////
//Author: Olubunmi Tosin
//Email: olubunmivictor6@gmail.com
//
////////////////////////////////////////////////////////////////////////////////


namespace FooBar
{
	function test()
	{
		// Create a new view object.
		// Note how we are inside another namespace.
		$views = new \Lara\View('./views');

		// Globalise the views object
		$views->globalise();
	}
}

namespace
{
	// Load the composer autoloader
	require('../../vendor/autoload.php');

	// Call the FooBar\test function to create the session
	FooBar\test();

	// Note how we have access to the view api globally
	echo View::make('globalise')->withGlobal('example');
}
