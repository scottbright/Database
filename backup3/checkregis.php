<html>
<head>
	<meta charset="utf-8">
</head>
<?php
	
	$con = mysql_connect("localhost", "potcharajo","qtwmv!4K_Z") or die("Unable to connect to MySQL");
	mysql_select_db("potcharajo_app") or die("cannot select MYSQL");
		
	mysql_query("INSERT INTO User ( ID,Pass,email ) VALUES ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['email']."')",$con) or die ("<script> alert('username or email has been used'); window.location='register.php'; </script>");
	header("Location:index.php");
?>

</html>