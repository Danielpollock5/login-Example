<?php

// require 'database.php';

if(!empty($_POST['email']) && !empty($_POST)['password']):

endif;
?>




<!DOCTYPE html>
<html>
<head>
	<!-- ==============Media queries============== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--===============BOOTSTRAP LINK============== -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<!--=============== Animate CSS ================-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- ==============custom CSS==================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--============== Font Awesome ================-->
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!--============== GOOGLE font =================-->
	<link href="https://fonts.googleapis.com/css?family=Codystar" rel="stylesheet">
	<!-- ==============ANGULAR JS ================= -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<title>login Below</title>
</head>
<body>

	<div class="header">
		<a href="/">Login App</a>
	</div>
		



		<h1>Login</h1>
		<span>or <a href="register.php">register here</a></span>



		<form action="login.php" method="POST">

			<input type="text" placeholder="Enter your Email" name="email">
			<input type="password" placeholder="and password" name="password">
			<input type="submit">
			
		</form>









	<!-- ================Jquery CDN =================-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- ================Bootstrap==================-->
	<!-- <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->
	<!-- =================JAVASCRIPT============== -->
	<script type="text/javascript" src="js/main.js"></script>
	<!-- =================ANGULAR JS================ -->
	<!-- <script type="text/javascript" src="js/app.js"></script> -->
	<!-- =================CONTROLLER LINK============ -->
	<!-- script type="text/javascript" src="js/controller/myctrl.js"></script> -->
</body>
</html>