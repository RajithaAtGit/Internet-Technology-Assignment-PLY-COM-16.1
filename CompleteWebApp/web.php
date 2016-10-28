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
            <h1 class="container blue">Module</h1>
            <a class="container box" href="Document/0001.  Module Descriptor.docx" download>0001.  Module Descriptor</a>
			<a class="container box" href="Document/0002. Assignment 16.1.docx" download >0002. Assignment 16.1</a>
			<a class="container box" href="Document/0003. Lecturer 01 Introduction.pptx" download>0003. Lecturer 01 Introduction</a>
			<a class="container box" href="Document/0004. Lecture 01- HTML.pptx" download>0004. Lecture 01- HTML</a>
        </div>
</body>
</html>
<?php
}
?>

