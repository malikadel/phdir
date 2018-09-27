<?php

	$servername = "localhost";
	$username = "root";
	$password = "password";

	try 
	{
	    $PDOC = new PDO("mysql:host=$servername;dbname=phdir", $username, $password);
	    $PDOC->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		define('DB_AVAILABLE', 1);
	}
	catch(PDOException $e)
	{
		define('DB_AVAILABLE', 0);
	    
	}
?> 