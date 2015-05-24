<?php
	$con = mysql_connect("localhost", "potcharajo","qtwmv!4K_Z") or die("Unable to connect to MySQL");
	//$con = mysql_connect("localhost", "root","") or die("Unable to connect to MySQL");
	mysql_select_db("potcharajo_app") or die("Can't Select MySQL");
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $con);
?>