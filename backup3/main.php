<!DOCTYPE html>
<html>
<head>
<title>Side-bar</title>
<style>
	.t_pos {
		position: fixed;
		top: 0px;
		left: 0px;
	}
	.t_bar {
		width: 100%;
		background-color: #389;
		opacity: 0.98;
		height: 40px;
	}
	.t_logo {
		position: fixed;
		top: 0;
		left: 20;
	}
	.t_login {
		position: fixed;
		top: 5;
		right: 0;
	}
	.s_pos {
		position: fixed;
		left: 0px;
		top: 40px;
	}
	.s_bar {
		height: 100%;
		background-color: #aab;
		opacity: 0.98;
		width: 24%;
	}
	.m_pos {
		position: relative;
		top: 30px;
		left: 330px;
	}
	.m_bar {
		height: 100%;
		background-color: #d59;
		opacity: 0.98;
		width: 100%;
	}
	.sch_bar {
		margin: 0;
		padding: 2px 10px;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 14px;
		border:2px solid #0076a3; border-right:1px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.sch_but {
		margin: 0;
		padding: 5px 15px;
		font-size: :14px;
		font-family: Arial, Helvetica, sans-serif;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top, #00adee, #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right: 5px 5px;
	}
	.text {
		color: white;
	}
</style>
</head>
<body bgcolor="#d59">
	<div id="main" class="m_pos m_bar">
		fdfds
		<?php 
		$asd = "asd";
		echo $asd; 
		?>
	</div>
	<div id="side" class="s_pos s_bar">
		<h3 class="text">Search</h3>
		<form name="search" method="get" action="">
			Name: <input type="text" class="sch_bar" name="AppName" size="21" maxlength="120">
			<br>
			<br>
			Catagory: 
			<select class="sch_bar" name="CID">
				<option value="c0">Book</option>
				<option value="c1">Business</option>
				<option value="c2">Education</option>
				<option value="c3">Entertainment</option>
				<option value="c4">Finance</option>
				<option value="c5">Food & Drink</option>
				<option value="c6">Games</option>
				<option value="c7">Health & Fitness</option>
				<option value="c8">Lifestyle</option>
				<option value="c9">Medical</option>
				<option value="c10">Music</option>
				<option value="c11">Navigation</option>
				<option value="c12">News</option>
				<option value="c13">Photo & Video</option>
				<option value="c14">Productivity</option>
				<option value="c15">Referece</option>
				<option value="c16">Social Networking</option>
				<option value="c17">Sports</option>
				<option value="c18">Travel</option>
				<option value="c19">Utilities</option>
				<option value="c20">Weather</option>
			</select>
			<br>
			<br>
			 Order by: 
			<select class="sch_bar" name="order">
				<option value="AppName">name</option>
				<option value="Price">Price</option>S
			</select>
			<br>
			<br>
			<input type="submit" value="search" class="sch_but">
		</form>
	</div>
	<div id="top" class="t_pos t_bar">
		<dev id="top_logo" class="t_logo">
			<img style="max-width:100px;max-height:60px;" src="https://www.google.com/a/cpanel/ku.th/images/logo.gif?service=google_default"></img>
		</dev>
		<div id="top_login" class="t_login">
			<form method="POST" action="search.php">
				Username: <input type="text" class="sch_bar" name="Username" size="21" maxlength="120">
				Password: <input type="text" class="sch_bar" name="Pass" size="21" maxlength="120">
				<input type="submit" value="Log In" class="sch_but">
				<form method="get" action="">
					<input type="submit" value="Register" class="sch_but">
				</form>
			</form>
		</div>
	</div>
</body>
</html>

