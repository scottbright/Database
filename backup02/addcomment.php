<?php
session_start();
$con = mysql_connect("localhost", "potcharajo","qtwmv!4K_Z") or die("Unable to connect to MySQL");
mysql_select_db("potcharajo_app") or die("cannot select MYSQL");

  include_once 'connect/db-connect.php';
  include_once 'connect/function.php';
  $Islogin = $_SESSION['islogin'];
  $AppID = $_SESSION['appid'];
  $Usercomment = $_POST['usercomment'];
  
  if ($Usercomment != "") {
  	AddAppComment($con,$Islogin, $AppID, $Usercomment);
  }
  header("Location:detail.php?no=".$AppID);

?>