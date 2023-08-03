<html>
<head>

<style>

body
{
	
	
	background-position:center;
	background-size:cover;
	height:auto;
	margin:0px;
	padding:0px;
	font-family:sans-serif;
	background-color:white;

	display: flex;
	justify-content: center;
	align-items: center;
	/* letter-spacing: 3px; */
	animation:transitiononpage 2s;
	
	
}





	
#textbox
{
	font-size:18;
	border:2px  solid red;
	font-weight:bold;
	border-radius:10px;
	width:500px;
	height:35px;
	/* letter-spacing: 4px; */
	transition:.3s;
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
	margin-left:10px;
	font-size:20;
}
.divv label
{

	width:600px;
	align:center;
	font-size:18;
	border:2px  solid white;
	border-radius:10px;
	background-color:white;
	color:#009688;
	padding-left:10px;
}
.divv
{
	border: 5px solid white;
	border-radius:20px;
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
	border-radius:20px;
	background-color:white;
	/* letter-spacing: 4px; */
	padding:5px;
	transition:.3s;
	font-weight:bold;
}
#submit:hover
{
	width:170px;
	/* font-size:20; */
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

<h1 align="center" > <font color="white"><h1>Let's Check It!</h1></font></h1>

<hr color="white" border="5px">

<br>
<br>

<form name="view" action="" method="POST">

<!-- <b><label> UserId</label></b> -->
<br>
<br>
<input id="textbox" name="search" type="search" placeholder="Enter UserId" maxlength="25"  autofocus required>

<input id="submit" type="submit" name="view"  value="Check!">
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
	
	$query=("select * from result where userid='$email'");

	$final=mysqli_query($con,$query);
	
	$register=("select * from register where email='$email'");

	$info=mysqli_query($con,$register);

$basicinfo=NULL;
if(mysqli_num_rows($info)==1)
{
	//echo"<br><font color='green'>You are a registered user!</font>";
	$basicinfo=mysqli_fetch_array($info);
	//echo $row['name'];

	
	

	if(mysqli_num_rows($final)>0)
	{
	//echo"<br><font color='green'>Here is your result!</font>";
	$row=mysqli_fetch_array($final);
	
	
	
	echo "<div class='result' width='1500' height='auto' name='questions'>
	<table  width='650' height='650'  align='center' cellpadding='12' cellspacing='0' >
	
 <tr>  
	<th colspan='4' ><h1> <font color='#009688'> Quiz Result! </font></th> </h1>
</tr>

<tr>
<td colspan='4'> <h3>"; echo "UserId:"." ".$row['userid']; 
echo"</td>
</tr>

<tr>
<td colspan='4'> <h3>"; echo "Name:"." ".$basicinfo['name']; 
echo"</td>
</tr>

<tr>
<td colspan='4'> <h3>"; echo "Gender:"." ".$basicinfo['gender']; 
echo"</td>
</tr>

<tr>
<td> <h3> Attempted: </td>
<td><h3>"; echo $row['attempt'];
echo" </td>
</tr>

<tr>
<td><h3> Correct: </td>
<td><h3>"; echo $row['correct']; 
echo"</td>
</tr>


<tr>
<td><h3> Wrong: </td>
<td> <h3>";  echo $row['wrong'];  
 echo"</td>
</tr>

<tr>
	<td align='left' colspan='1'> <h3>  Total Marks   </td> </h2>
	<td align='left' colspan='2'> <h3> "; echo $row['correct']."/10";    
	echo"</td> </h2>
</tr>


<tr>
<td><h3>Result:</td>
<td colspan='4'> <h3>";echo $row['fp']; 
echo"</td>
</tr>
	
</form>
</table>
<center>
<br>
<br>
<form action='homescreen.html'>
<input type='submit' value='Get Back!'>";?>
<button type='button' value='Print' onclick="window.print()">Get Print!</button>
<?php echo"</form>

</div>";



mysqli_close($con);
		
}
	
else
{
	echo"<br><br><h2><font color='white'><center>You haven'	t given the test!</font>";
}
}

else
{
	echo"<br><br><h2><font color='white'><center>You are not a registered user!</font>";

}
	
}


?>
<br>
<br>
<br>
<br>











