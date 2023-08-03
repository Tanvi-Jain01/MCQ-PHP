<html>
<head>
<title>Your Marks </title>

<style>










</style>
</head>


<body>
<div>
<form name="display_marks" method="POST" action="">
enter user id<input type="text" name="enteruserid" >
<br>
enter captcha code<input type="text" name="entercaptcha" required >

<br>

<br>
<br>



<input type="submit" value="jana beeeeee" name="submit" >
</form>

<?php


session_start();

$n1= rand(1,99);
$n2= rand(65, 90);
$n3= rand(10,99);
$n4= rand(97, 122); 

$c1=chr($n2);
$c2=chr($n4);




$captcha=$n1.$c1.$n3.$c2;

//echo $captcha;
$_SESSION['cap']=$_POST['cap']=$captcha;
echo $_SESSION['cap'];

echo"<br>";



if(isset($_POST['submit']))
{
	
		
$final=$_POST['entercaptcha'];
//echo $final;

//$captcha=$_POST['captcha'];
echo"<br>";

	if($final===$_SESSION['cap'])
	{
		echo"here you get your result!";
	}
	else
	{
		echo"captcha code is incorrect";
	}

}


else
{
echo "";
}



if(isset($_POST['submit']))
{
	echo "okay";
}

?>

</body>
<html>
