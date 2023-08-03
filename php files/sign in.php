<html>
<head>
<title> Registration</title>
<style>

body
{
	
	 background: url('Flower_5714.jpeg')  no-repeat;
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
	
	
	
}



.divv
{
	
	border-radius:20px;
	border: 2px solid white;
	background-color: black;
	width:400px;
	height:auto;
	color:white;
	padding:10px;
	opacity:1;
	position:absolute;	
	text-align:left;
	/* padding-left:30px; */
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
	border:1px  solid black;
	font-weight:bold;
	border-radius:2px;
	width:90%;
	height:40%;
	transition:.7s;
	
	animation: transitionontext 10s;
	
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
	margin-left:10px;
	/* font-size:20; */
}
.divv label
{

	width:600px;
	align:center;
	font-size:18;
	border:2px  solid white;
	border-radius:70px;
	background-color:red;
	padding-left:10px;
}

label
{
	
	padding: 5px 5px;
	
}


#submit
{
	width:30%;
	align:center;
	color:white;
	font-size:18;
	border:3px  solid white;
	border-radius:70px;
	background-color:black;
	
	padding:5px;
	font-weight:bold;
}
#submit:hover
{
	width:40%;
	/* font-size:20; */
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


	
</style>
</head>

<body>

<div class="divv">

<img src="logincontact.png" class="image">

<br>
<br>
<h1 align="center">Registration</h1>

<hr color="white" border="5px">

<br>
<br>
<br>

<form name="sign" action="" method="POST" >

<!-- <b><label> Name</label></b> -->
<input id="textbox" name="UserName" type="textbox" placeholder="Full Name" maxlength="50"  autofocus required>



<!-- <b><label> Email</label></b> -->
<br>
<br>
<input id="textbox" name="UserMail" type="email" placeholder="Enter your Email" autofocus required>

<?php
if(isset($_POST['register']))
{
	
	$con=mysqli_connect("localhost","root","","dwpd project");

	if(mysqli_connect_errno())
	{
	echo"failed to connect to database";
	mysqli_connect_error();
	}

else
//echo"connected successfully<br>";

$email=$_POST['UserMail'];
	
	$query=("select * from register where email='$email'");

	$final=mysqli_query($con,$query);


	if(mysqli_num_rows($final)>0)
{
	echo"<br><font color='red'>Sorry, this Email already exists. Try again!</font>";
	
}
else
{
	echo"<br>This email will be used as your UserId!";
}
}
?>

<br>
<br>


<!-- <b> <label> Gender</label> -->

 <input   type="radio"   name="gender" value="Male"> Male </input>
<br>
  <input type="radio"  name="gender" value="Female"> Female </input>
 </b>
<br>
<br>

<!-- <b><label>Set Password</label></b> -->

<input id="textbox" type="password" name="SetPassword" placeholder="Enter your Password" maxlength="50" minlength="8" required>

<br>

<?php
$n2= rand(65, 90);
$n4= rand(97, 122); 
$c1=chr($n2);
$c2=chr($n4);
echo "Suggested: ".$c1.mt_rand(12345575, 99999999).$c2;

?>
<br>
<br>

<!-- <b><label>Confirm Password</label></b> -->

<input id="textbox" type="password" name="ConfirmPassword" placeholder="Confirm your Password" maxlength="50" minlength="8" required>
<?php
session_start();


if(isset($_POST['register']))
{
	
	if($_POST['SetPassword']!=$_POST['ConfirmPassword'])
	{
		echo"<br><font color='red'>Password doesn't matched, Retry!</font>";
		//$cp="Password not matched";
		
	}
	
	else
	{
		echo"<br>Password matched";
		$cp=md5($_POST['ConfirmPassword']);
		$_SESSION['register']=$_POST['register'];
		$email=$_SESSION['UserMail']=$_POST['UserMail'];
		$name=$_SESSION['UserName']=$_POST['UserName'];
		$gender=$_POST['gender'];
	
	$name=mysqli_real_escape_string($con,$_SESSION['UserName']);
	$confirm=mysqli_real_escape_string($con,$cp);
	
	
	
	
	$signin="INSERT INTO register (`name`, `email`, `gender`, `pswd`) VALUES ('$name', '$email', '$gender','$confirm')";
	//echo $signin;
	$result=mysqli_query($con,$signin);
	
	if($result){
		header("location:after reg.php");
	}
	
	


mysqli_close($con);
	}
}
?>
<br>
<br>
<br>
<br>

<center>
<input id="submit" type="submit" name="register"  value="Register">

</div>
</form>
</body>
</html>




