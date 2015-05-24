<?php
	
	$hostname = "localhost";
	$username = "potcharajo";
	$password = "qtwmv!4K_Z";
	$dbname = "potcharajo_app";
	
	try {
	    $con = new PDO("mysql:host=$hostname; dbname=$dbname; charset=utf8", $username, $password);
	    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //echo 'Connected to database<br><br>';
	    }
	catch(PDOException $e)
	    {
	    echo $e->getMessage();
	    }
?>