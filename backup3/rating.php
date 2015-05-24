<?php
	session_start();
	include_once 'connect/db-connect.php';
	include_once 'connect/function.php';
	

	$UserID = $_GET['acc'];
	$AppID = $_GET['id'];
	$Rate = $_GET['rate'];

	if (infoRating($con,$UserID,$AppID) == 0) {
		echo "<script> alert('You have rated this App before.'); window.location='detail.php?no=".$AppID."'; </script>";
	}
	else {
		insertRating($con,$UserID,$AppID,$Rate);
		echo "<script> alert('Thank you for rating this App.'); window.location='detail.php?no=".$AppID."'; </script>";
	}
	
	//echo getRating($con,$series_id);
?>
