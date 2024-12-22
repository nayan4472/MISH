<?php 

if(isset($_POST['y3']))

{
	$a=$_POST['y4'];
	$b=$_POST['y5'];
	$a1=$a+$b;

	echo $a;
}
else
{
	$a="";
	$b="";
	$a1="";
}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>


	<style type="text/css">
div
	{
		background-color: red;
		height: 500px;
		width: 300px;
		border: 2px solid blue;

	}
	h1
	{
	    color: blue;
		text-shadow: 2px 2px lime;
	}
	form
	{
		color: skyblue;
	}
	input 
	{
		border: 2px solid blue;
	}
	.sub{
		transition: 0.25s ease;
	}
	.sub:hover{
		transform: scale(1.04);
	}
	h1{
		transition: 0.25s ease;
	}
	h1:hover{
		transform: scale(1.04);
	}
	input{
		transition: 0.25s ease;
	}
	input:hover{
		transform: scale(1.04);
	}
	div{
		transition: 0.25s ease;
	}
	div:hover{
		transform: scale(1.04);
	}
</style>
</head>
<style>

</style>
<form action="mark.php" method="POST">
<body>
	<center>
<div>
		<h1><u> Marksheet</u></h1>
<form action="mark.php" method="POST">

	Id:     <input type="text" name="y1"><p>
	Name: <input type="text" name="y2"><p>
    Course:     <input type="text" name="y3"><p>
	m1:     <input type="text" name="y4"><p>
	m2:     <input type="text" name="y5"><p>
		Total:     <input type="text" name="y6" value="<?php  echo $a1;  ?>"><p>
		Persentage:     <input type="text" name="y7" value="<?php  echo $a2;   ?>"><p>
		Grade:     <input type="text" name="y8" value="<?php  echo $a3;   ?>"><p>

		<input type="submit" name="y3" class="sub" value="Submit">
		<input type="submit" name="y3" class="sub" value="Reset">

 
		
</form>
</div>
	</center>
</form>
</body>
</html>