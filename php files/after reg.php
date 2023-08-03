<html>
<head>
<title> Registration Done</title>
<style>
body{
	display: flex;
	justify-content: center;
	align-items: center;
	letter-spacing: 2px;
	
	 background: url('meditation.gif')  no-repeat;
	background-position:center;
	background-size:cover;
	height:100vh;
}
.show
{
	width:1000px;
	height: 600px;
	border-left:10px solid magenta;
	border-bottom: 5px solid blue;
	color:black;
	background-color:white;
	opacity:.6;
	display: flex;
	justify-content: center;
	align-items: center;
	letter-spacing: 2px;
	
	font-size: 40px;

}







</style>
<body>
<h1>
<div class="show">

<?php session_start();
if(isset($_SESSION['register']))
{
	echo "Hey,"." ".$_SESSION['UserName'];
	echo"<br>";
	echo"";
	echo"<br>";
	echo"<br>";
 echo "Your UserId will be:"." ".$_SESSION['UserMail'];
 echo"<br>";
 
}
else
{
	echo"";
	echo"Retry!";
}

 session_destroy();
 ?>
</h1>
