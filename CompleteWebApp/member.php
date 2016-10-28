<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {
?>
<!doctype html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/lms_style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
<h2 class="welcom-text">Welcome, <?=$_SESSION['sess_user'];?>! <a class="login" href="logout.php">Logout</a></h2>
<h1 class="text-center">NSBM LMS</h1>

	<div id="form1">
            <h1 class="container blue">Select Courses</h1>
            <a class="container box" href="web.php">BMIS111 Internet Technology</a>
			<a class="container box" href="">BMIS105 Database Management Systems</a>
			<a class="container box" href="">Professional Development</a>
			<a class="container box" href="">BMIS108 Programming in Java</a>
        </div>
</body>
</html>
<?php
}
?>


