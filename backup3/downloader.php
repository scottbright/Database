<?php
session_start();
$url = "./apk/".$_SESSION['appid'].".apk";
$file = $_SESSION['appid'].".apk";
header("Content-disposition: attachment; filename=".$file);
header("Content-type: application/apk");
readfile($file);

?>