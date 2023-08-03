<html>

<head>
<title> MCQ </title>
<style>

body
{
padding:0px;
margin:0px;
height:auto;
width:auto;
	display:flex;
	justify-content:center;
	align-items:center;
	letter-spacing:2px;
	font-family:sans-serif;
	font-weight:bold;
	background-color: skyblue;

}

.main
{
	height:auto;
	width:auto;
	border-radius: 30px;
	border: 2px solid lightgrey;
	box-shadow: 5px 5px lightgrey;
	margin-top:20px;
	padding: 10px;
	box-sizing:border-box;
		background-color: white;
		
		display:flex;
	justify-content:center;
	align-items:center;
	
}

.box
{
	height:500px;
	width:1200px;
	border:2px solid lightgrey;
	border-radius:20px;
	box-shadow: 3px 3px lightgrey;
	box-sizing:border-box;
	padding:0px;
		background-color: white;
		
	
}

#indicator
{
	width:1200px;
	height: 320px;
	border:2px solid white;
	border-radius:20px;
	line-height:40px;
	background-color:#009688;
	color:white;
	padding-left:15px;
	//font-size:20px;
	
}

	button
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
button:hover
{
	background-color:#009688;
	color:white;
}


.imagebox
{
	height:100px;
	width:1100px;
	border:10px solid white;
	border-radius:15px;
	font-size:24px;

	background-color:skyblue;
	color:black;
	text-transform:uppercase;
	margin-top:10px;
	display:flex;
	justify-content: center;
	align-items: center;

}


.container
{
position:absolute;
height:200px;
}

input[type="radio"]
{
display:none;
}

label
{
position:relative;
color:blue;
font-size:22px;
border:5px solid white;
width:500px;

border-radius:10px;
box-shadow:1px 1px 1px 1px lightgrey;
padding:10px 50px;
display:flex;
cursor:pointer;
margin-left:50px;
transition:0.7s;
}

label:hover
{
	background-color:skyblue;
	border:5px solid white;
	border-radius:20px;
	box-shadow:2px 2px 2px 2px lightgrey;
	
}




input[type="radio"]:checked+label
{
background-color: blue;
color:white;
}

input[type="radio"]:checked+label:before
{

border:10px solid white;
background-color:blue;
color:white;
}

label:before
{

content:"";
height:15px;
width:15px;
border:3px solid blue;
border-radius:50%;
margin-right:20px;
}


#submit
{
border:5px solid white;
border-radius:10px;
background-color:blue;
width:200px;
height:50px;
color:white;
font-style:bold;
font-size:24px;
transition:0.5s;
}

#submit:hover
{
border:7px solid white;
background-color:green;
}



.answers
{
	display:none;
	margin-left:50px;
}



</style>

<script type="text/javascript">

function disappear()
{
	document.getElementById ("indicator") . innerHTML="BEST OF LUCK !! ";
}

</script>
</head>

<body>

<?php
if(!(isset($_POST['login'])))
{
	//header("location:login Tanvi.php");
	
}



?>



<div class="main">


<form name="questions" method="POST" action="yourans.php"  >
<div id="indicator">

<h1>Hello, <?php echo $_COOKIE["name"];?></h1><hr>
<h2><u>Instructions:</u> <br>Total number of Questions: 10 <br> Each question weightage: 1</font> <br>BEST OF LUCK !!

<center><button type="button" onclick="disappear()"> Got It! </button></h2>

</div>
<br>
<br>

<div class="box">
<div class="imagebox">
What is the full form of PHP?
</div>
<br>


<div class="container">

<input   type="radio" name="ans1" value="HyperText Pre Processor"  id="HyperText Pre Processor"  > <label for="HyperText Pre Processor"> HyperText Pre Processor </label>
<br>
<input  type="radio" name="ans1" value="Pre HyperText Processor"  id="Pre HyperText Processor" > <label for="Pre HyperText Processor"> Pre HyperText Processor </label>
<br>

<input   type="radio" name="ans1" value="Pro Hyper Processing" id="Pro Hyper Processing">  <label for="Pro Hyper Processing"> Pro Hyper Processing </label>
<br>
<input type="radio" name="ans1" value="HyperText Pre Processing"  id="HyperText Pre Processing">  <label for="HyperText Pre Processing"> HyperText Pre Processing </label> 
<br>
<div class="answers"> The answer is: HyperText Pre Processor</div>
</div>
</div>
<br>
<br>

<div class="box">
<div class="imagebox">
php files have a default extension of?
</div>
<br>


<div class="container">
<input  type="radio" name="ans2"  id=".ph" value=".ph " >  <label for=".ph">.ph </label> <br>
<input  type="radio" name="ans2" id=".html" value=".html"> <label for=".html">.html</label>
<br>

<input   type="radio" name="ans2" id=".php" value=".php" >  <label for=".php">.php</label> <br>
<input  type="radio" name="ans2" id=".xml" value=".xml " >  <label for=".xml">.xml </label> <br>
</div>
</div>
<br>
<br>

<div class="box">
<div class="imagebox">
what should be the correct syntax to write a PHP code?
</div>
<br>


<div class="container">
<input  type="radio" name="ans3" id="/php >" value="/php >"> <label for="/php >"> /php > </label> <br>
<input  type="radio" name="ans3" id=".ph /." value=".ph /."> <label for=".ph /."> .ph /. </label>  
<br>

<input   type="radio" name="ans3" id="All of the above" value="All of the above"> <label for="All of the above"> All of the above </label> <br>
<input  type="radio" name="ans3" id="None" value="None"><label for="None"> None </label>
</div>
</div>
<br>
<br>

<div class="box">
<div class="imagebox">
which version of php introduced try/catch Exception?
</div>
<br>


<div class="container">
<input  type="radio" name="ans4" id="PHP3" value=" PHP3" >  <label for="PHP3"> PHP3 </label> <br>
<input  type="radio" name="ans4" id="PHP4" value="PHP4"> <label for="PHP4">PHP4 </label>

<br>
<input   type="radio" name="ans4" id="PHP6" value="PHP6">  <label for="PHP6"> PHP6 </label> <br>
<input  type="radio" name="ans4" id="PHP5" value="PHP5">  <label for="PHP5"> PHP5 </label> <br>

</div>
</div>
<br>
<br>
<div class="box">
<div class="imagebox">
how can we add single line comment in our code?
</div>
<br>


<div class="container">

<input  type="radio" name="ans5" id="#" value=" #"> <label for="#"> #</label> <br>
<input  type="radio" name="ans5" id="/* */" value="/* */">  <label for="/* */"> /* */</label>
<br>

<input   type="radio" name="ans5" id="//" value="//">  <label for="//">// </label> <br>
<input  type="radio" name="ans5" id="All of the above/" value="All of the above">  <label for="All of the above/">All of the above </label>

</div>
</div>
<br>
<br>



<div class="box">
<div class="imagebox">
how many type of array is present in php?
</div>
<br>


<div class="container">
<input  type="radio" name="ans6" id="2"  value="2"> <label for="2">2 </label> <br>
<input  type="radio" name="ans6" id="4" value="4"> <label for="4">4</label>
<br>

<input   type="radio" name="ans6" id="3" value="3"> <label for="3">3</label> <br>
<input  type="radio" name="ans6" id=" None of the above" value=" None of the above"> <label for=" None of the above"> None of the above</label>
</div>
</div>
<br>
<br>



<div class="box">
<div class="imagebox">
is php a loosely typed language?
</div>
<br>


<div class="container">
<input  type="radio" name="ans7" id="Yes" value="Yes"> <label for="Yes">Yes </label> <br>
<input  type="radio" name="ans7" id="No" value="No"> <label for="No"> No</label>
<br>


</div>
</div>
<br>
<br>




<div class="box">
<div class="imagebox">
php's numerically index begins with?
</div>
<br>


<div class="container">
<input  type="radio" name="ans8" id="1" value="1" ><label for="1"> 1</label> <br>
<input  type="radio" name="ans8" id="-1" value="-1"><label for="-1">-1</label>
<br>

<input   type="radio" name="ans8" id="0" value="0"> <label for="0"> 0 </label> <br>
<input  type="radio" name="ans8" id="+1" value="+1"> <label for="+1">+1</label> <br>
</div>
</div>
<br>
<br>


	<div class="box">
<div class="imagebox">
which is NOT the correct syntax to declare a variable?
</div>
<br>

<div class="container">

<input  type="radio" name="ans9" id="$one;" value="$one;"> <label for="$one;">$one;</label> <br>
<input  type="radio" name="ans9" id="$2one;" value="$2one;"><label for="$2one;">$2one;</label>
<br>

<input   type="radio" name="ans9" id="$o_ne;" value="$o_ne;"><label for="$o_ne;">$o_ne;</label> <br>
<input  type="radio" name="ans9" id="$one1;" value=" $one1;"> <label for="$one1;">$one1;</label>
</div>
</div>
<br>
<br>

<div class="box">
<div class="imagebox">

who created php?

</div>
<br>


<div class="container">
<input  type="radio" name="ans10" id="Dennis Ritchie" value=" Dennis Ritchie" ><label for="Dennis Ritchie"> Dennis Ritchie</label> <br>
<input  type="radio" name="ans10" id="Bjarne Stroustrap" value="Bjarne Stroustrap"><label for="Bjarne Stroustrap">Bjarne Stroustrap</label> <br>

 <input   type="radio" name="ans10" id="Tim Berners-Lee" value="Tim Berners-Lee"> <label for="Tim Berners-Lee">Tim Berners-Lee</label> <br>
<input  type="radio" name="ans10" id="Rasmus Lerdorf" value="Rasmus Lerdorf"><label for="Rasmus Lerdorf">Rasmus Lerdorf </label>
</div>
</div>
<br>
<br>


<hr color="lightgrey">

<br>
<br>
<br>
<br>
<br>

<center>

<input type="submit" id="submit" name="submit_test" value="SUBMIT"> 


</div>
</form>




</body>
</html>













