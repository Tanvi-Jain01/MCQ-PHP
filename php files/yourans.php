<style>
body
{
	background-color:#009688;
font-family:sans-serif;
letter-spacing:3px;
height:150vh;

display: flex;
	justify-content: center;
	align-items: center;
	}

table
{
	
	background-color:white;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius:20px;
	
}
	
	input, button
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
	}

 td
{
	border:1px solid #cccccc;
	padding-left:8px 15px;
	font-weight: 500;
	color:#000000;
}

.result
{
	width:auto;
	height:auto;
}
</style>
<body>


<?php

session_start();

static $attempt=0;
static $count=0;
$wrong=0;
$correct=0;
$fp=NULL;


if(isset($_POST['submit_test']))
	
{

if(isset($_POST['ans1']))	
{
	$answer1=$_POST['ans1'];
	//echo  $answer1;
	$attempt++;
		
			if($answer1=="HyperText Pre Processor")
		{
			$count++;
		}
		
}

	

if(isset($_POST['ans2']))	
{
	$answer2=$_POST['ans2'];
	//echo $answer2;
	echo"<br>";
	$attempt++;
		
			if($answer2==".php")
		{
			$count++;
		}
		
}


if(isset($_POST['ans3']))	
{
	$answer3=$_POST['ans3'];
	//echo  $answer3;
	echo"<br>";
	$attempt++;
		
			if($answer3=="None")
		{
			$count++;
		}
		
}

if(isset($_POST['ans4']))	
{
	$answer4=$_POST['ans4'];
	//echo  $answer4;
	echo"<br>";
	$attempt++;
		
			if($answer4=="PHP5")
		{
			$count++;
		}
		
}


if(isset($_POST['ans5']))	
{
	$answer5=$_POST['ans5'];
	//echo  $answer5;
	echo"<br>";
	$attempt++;
		
			if($answer5=="All of the above")
		{
			$count++;
		}
		
}


if(isset($_POST['ans6']))	
{
	$answer6=$_POST['ans6'];
	//echo  $answer6;
	echo"<br>";
	$attempt++;
		
			if($answer6=="3")
		{
			$count++;
		}
		
}


if(isset($_POST['ans7']))	
{
		$answer7=$_POST['ans7'];
	//echo  $answer7;
	echo"<br>";
	$attempt++;
		
			if($answer7=="Yes")
		{
			$count++;
		}
		
}


if(isset($_POST['ans8']))	
{
	$answer8=$_POST['ans8'];
	//echo  $answer8;
	echo"<br>";
	$attempt++;
		
			if($answer8=="0")
		{
			$count++;
		}
		
}


if(isset($_POST['ans9']))	
{
	$answer9=$_POST['ans9'];
	//echo  $answer9;
	echo"<br>";
	$attempt++;
		
			if($answer9=="$2one;")
		{
			$count++;
		}
		
}


if(isset($_POST['ans10']))	
{
	$answer10=$_POST['ans10'];
	//echo  $answer10;
	echo"<br>";
	$attempt++;
		
			if($answer10=="Rasmus Lerdorf")
		{
			$count++;
		}
		
}





}

$uid= $_SESSION['uid'];


$con=mysqli_connect("localhost","root","","dwpd project");

if(mysqli_connect_errno())
{
echo"failed to connect to database";
mysqli_connect_error();
}
else
//echo"connected successfully<br>";

/*else
{
	echo"retry";
}*/
$query=("select * from register where email='$uid'");

	$final=mysqli_query($con,$query);


	
	if(mysqli_num_rows($final)==1)
{
	//echo"<br><font color='green'>YOu are a registered user!</font>";
	$row=mysqli_fetch_array($final);
	//echo $row['name'];
}

$wrong=10-$count;

if($count>4)
{
	$fp="<font color='green'><h3>Congratulations! You have passed this exam.</h3>";
	$result="Pass";
}
else
{$fp="<font color='red'><h3>Sorry..! You are Failed in Exam.</h3>";
	$result="Fail";
}


	echo "<div class='result' width='1000' height='2000' name='questions'>
	<table  width='680' height='550'  align='center' cellpadding='12' cellspacing='0' >
	
 <tr>  
	<th colspan='8' ><h1> <font color='#009688'> Quiz Result! </font></th> </h1>
</tr>

<tr>
<td colspan='8'> <h3>"; echo "Name:".$row['name']; 
echo"</td>
</tr>

<tr>
<td colspan='8'> <h3> UserId: $uid </td>
</tr>



<tr>
<td> <h3> Attempted: </td>
<td colspan='2'><h3> $attempt </td>
</tr>

<tr>
<td><h3> Correct: </td>
<td colspan='2'><h3> $count </td>
</tr>


<tr>
<td><h3> Wrong: </td>
<td colspan='2'> <h3> $wrong </td>
</tr>

<tr>
	<td align='left' colspan='1'> <h3>  Total Marks   </td> </h2>
	<td align='left' colspan='2'> <h3>  $count/10  </td> </h2>
</tr>


<tr>
<th colspan='6'> $fp </th>
</tr>
	

</table>
<center>
<br>
<br>

<form  method='POST'>
<input type='submit' value='Get Back!' name='back'>
<input type='submit' value='Log Out' name='logout'>

";?>
<?php 
if(isset($_POST['logout']))
{
	//setcookie["name",$_POST['']]
	setcookie("name","");
	setcookie("pswd","");
	header("location:homescreen.html");

}
if(isset($_POST['back']))
{
	header("location:homescreen.html");
}

?>
<button type='button' value='Print' onclick="window.print()">Print</button>
<?php echo"</form>

</div>";


//echo $_SESSION['uid'];
$uid= $_SESSION['uid'];
$pswd= $_SESSION['pswd'];
//echo $_SESSION['pswd'];

	$last=" INSERT INTO `result` (`id`, `userid`, `password`, `attempt`, `correct`, `wrong`, `fp`) VALUES (NULL, '$uid', '$pswd', '$attempt', '$count', '$wrong', '$result') ";
	
	$insert=mysqli_query($con, $last);
	
	if($insert)
{
	//echo"record insert successfully";
}
else
{
	echo"Retry";
}
mysqli_close($con);
	

	




session_destroy();

?>

