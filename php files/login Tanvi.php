<html>
<head>

<style>

body
{
	
	background: url('floower.jpg')  no-repeat;
	background-position:right;
	background-size:cover;
	height:100vh;
	margin:0px;
	padding:0px;
	font-family:sans-serif;

	display: flex;
	justify-content: center;
	align-items: center;
	backdrop-filter: blur(5px);
	/* letter-spacing: 4px; */
	
	
	
}
a
{
	color:white;
		padding-left:30px;
		font-weight:bold;
}


.divv
{
	
	border-radius:50px;
	border: 5px solid white;
	background-color: black;
	width:600px;
	height:auto;
	color:white;
	/* opacity:.7; */
	position:absolute;	
	padding-left:30px;
	box-sizing:border-box;
	animation:transitiononpage 2s;
}
@keyframes transitiononpage
{
	from
	{
		opacity 0;
		transform:rotateY(-100deg);
	}
	to
	{
		opacity 1;
		transform:rotateX(0deg);
		
	}
}
	
#textbox
{
	font-size:18;
	border:2px  solid black;
	font-weight:bold;
	border-radius:20px;
	width:500px;
	height:35px;
	/* letter-spacing: 4px; */
	transition:.7s;
	
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
	//align:center;
	font-size:18;
	border:3px  solid white;
	border-radius:70px;
	background-color:red;
	padding-left:10px;
}

#submit
{
	width:150px;
	align:center;
	color:white;
	font-size:18;
	border:3px  solid white;
	border-radius:70px;
	background-color:black;
	/* letter-spacing: 4px; */
	padding:5px;
	font-weight:bold;
}
#submit:hover
{
	width:170px;
	font-size:20;
		border:4px  solid white;
}

.image
{
	width:100px;
	height:100px;
	border-radius:50%;
	position:absolute;
	top:-50px;
left:calc(50% - 50px);
	
}
label
{
		padding: 5px 5px;
		
}


	
</style>
</head>

<body>

<div class="divv">

<img src="logincontact.png" class="image">

<br>
<br>
<h1 align="center"> Login</h1>

<hr color="white" border="5px">

<br>


<form name="login" action="#" method="POST">
<!-- <b><label> UserID</label></b> -->
<br>

<input id="textbox" type="textbox" placeholder="Enter your UserID" name="uid" autofocus required value= <?php if(isset($_COOKIE["name"])) { echo $_COOKIE["name"];} ?>>
<br>
<br>


<!-- <b><label> Password</label></b> -->
<br>
<br>
<input id="textbox" type="password" placeholder="Enter your Password" name="pswd" required value= <?php if(isset($_COOKIE["pswd"])) { echo $_COOKIE["pswd"];} ?>>
<?php

session_start();

$con=mysqli_connect("localhost","root","","dwpd project");

if(mysqli_connect_errno())
{
echo"failed to connect to database";
mysqli_connect_error();
}
else
//echo"connected successfully<br>";


if(isset($_POST['login']))
{
	$uid=$_SESSION['uid']=$_POST['uid'];
	$pswd=$_SESSION['pswd']=md5($_POST['pswd']);
	
	
	$query=("select * from register where email='$uid' AND pswd='$pswd'");

	$final=mysqli_query($con,$query);


	
	if(mysqli_num_rows($final)==1)
{
	echo"<br><font color='green'>You are a registered user!</font>";
	
	
	setcookie("name",$_POST['uid'], time()+60*10);
	setcookie("pswd",$_POST['pswd'], time()+60*10);
	echo"cookie set";
	
	header("location:mcq.php");
	exit;
	
	
}
	

else
{
	setcookie("name","");
	setcookie("pswd","");
	echo"<br><br><font color='red'>Userid or Password doesn't matched!</font>";
}
}

?>
<br>
<br>
<br>
<br>
<center>
<input id="submit" type="submit"  value="Login" name="login"><br><br> </center>
<a href="sign in.php"><align="left"> Not registered yet?</a>

</div>


</body>
</html>
