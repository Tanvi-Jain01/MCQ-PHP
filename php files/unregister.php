<html>
<head>

<style>

body
{
	
	
	background-position:center;
	background-size:cover;
	height:auto;
	margin:0px;
	padding:20px;
	font-family:sans-serif;
	background-color:white;

	display: flex;
	justify-content: center;
	align-items: center;
	letter-spacing: 3px;
	animation:transitiononpage 2s;
	
	
}





	
#textbox
{
	font-size:18;
	border:2px  solid red;
	font-weight:bold;
	border-radius:50px;
	width:500px;
	height:35px;
	letter-spacing: 4px;
	transition:.7s;
	padding-left:10px;
	animation: transitionontext 7s;
	
}

@keyframes transitionontext
{
	from
	{
		opacity:-0.7;
		
		
	}
	to
	{
		//visibility:visible;
		opacity: 1;
		
		
	}
}

#textbox:hover
{
	margin-left:40px;
	font-size:20;
}
.divv label
{

	width:600px;
	align:center;
	font-size:18;
	border:2px  solid white;
	border-radius:70px;
	background-color:white;
	color:#009688;
	padding-left:10px;
}
.divv
{
	border: 12px solid white;
	border-radius:50px;
	width:1200px;
	padding-lefft:10px;
	background-color:#009688;
}

label
{
	
	padding: 5px 5px;
	
	
}


#submit
{
	width:150px;
	align:center;
	color:#009688;
	font-size:18;
	border:3px  solid white;
	border-radius:70px;
	background-color:white;
	letter-spacing: 4px;
	padding:5px;
	font-weight:bold;
}
#submit:hover
{
	width:170px;
	font-size:20;
}



table
{
	
	background-color:white;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius:20px;
	
}
	
	input,button
	{
		width:200px;
		height:40px;
		border-radius:20px;
		border:2px solid white;
		background-color:white;
		color:#009688;
		font-family:sans-serif;
		font-weight:bold;
		font-size:22px;
		letter-spacing:2px;
		cursor:pointer;
	}
	
	input,button:hover
	{
		//width:250px;
	}

 td
{
	border:1px solid #cccccc;
	padding-left:8px 15px;
	font-weight: 500;
	color:#000000;
}
tr:hover
{
	color:green;
	font-size:22px;
}


	
</style>
</head>

<body>
<div class="divv">
<br>
<br>

<h1 align="center" > <font color="white"><h1>Unregister</h1></font></h1>

<hr color="white" border="5px">

<br>
<br>

<form name="view" action="" method="POST">

<b><label> UserId</label></b>
<br>
<br>
<input id="textbox" name="search" type="search" placeholder="Enter UserId" maxlength="50"  autofocus required>
<br>
<br>
<br>
<b><label> Password </label></b>
<br>
<br>
<input id="textbox" name="pswd" type="password"  maxlength="100"  autofocus required>
<br>
<br>
<br>
<br>

<input id="submit" type="submit" name="view"  value="Unregister">
<br>
<br>
<br>
<?php
if(isset($_POST['view']))
{
	
	$con=mysqli_connect("localhost","root","","dwpd project");

	if(mysqli_connect_errno())
	{
	echo"failed to connect to database";
	mysqli_connect_error();
	}

else
//echo"connected successfully<br>";

$email=$_POST['search'];
//$pswd=$_POST['pswd'];
$pswd=md5($_POST['pswd']);



	$register=("select * from register where email='$email' AND pswd='$pswd'");

	$info=mysqli_query($con,$register);



if(mysqli_num_rows($info)==1)
{
	$register=("delete from register where email='$email' AND pswd='$pswd'");

	$delete=mysqli_query($con,$register);
	if($info)
	echo"<br><center><h1><font color='white'>Hey there, You are unregistered Now!</font>";
else
	echo"<br><center><h1><font color='white'>Some error occured, retry!</font>";
		
}
else
{
		echo"<br><center><h1><font color='white'>UserId or Password doesn't matched</font>";
}
	
	

mysqli_close($con);
		

	

	
}


?>
<br>
<br>
<br>
<br>











