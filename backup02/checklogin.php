<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

</head>
<?php

	$con = mysql_connect("localhost", "potcharajo","qtwmv!4K_Z") or die("Unable to connect to MySQL");
	mysql_select_db("potcharajo_app") or die("cannot select MYSQL");

	$databaselogin = mysql_query("SELECT * from User WHERE (ID ='".$_POST['username']."') and (Pass ='".$_POST['password']."')");  
	
	$databasevalid = mysql_num_rows($databaselogin);   

	if(empty($databasevalid)){
		header("Location:index.php");
	}
	else{
		session_start();
		$_SESSION['islogin'] = $_POST['username'];
		header("Location:index.php");
	}
?>


</html>