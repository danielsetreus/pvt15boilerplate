<?php

	// Initiate the system - this file requires all other needed files. 

	// Set the domain path
	define("BASE_URL", dirname($_SERVER['PHP_SELF']));
	
	require "route.php";
	require "commonFunctions.php";
?>