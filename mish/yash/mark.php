<?php 


if(isset($_POST['y3']))

{
	$a=$_POST['y4'];
	$b=$_POST['y5'];
	$a1=$a+$b;

	
	echo "Total : $a1";

	$a2=$a1*100/140;

	echo "<p> Grade : $a2";

	if($a2>90 && $a2<80 )
	{
		//$a3="A";
		echo "<p>A";
	}
	else if($a2>80 && $a2<70 )
	{
		//$a3="B";
		 echo "<p>B";
	}
	else if($a2>70 && $a2<60 )
	{
		//$a3="C"; 
		echo "<p>C";
	}
	else if($a2>60 && $a2<50 )
	{
		//$a3="D"; 
		echo "<p>D";
	}
	else
	{
		//$a3="Fail";
		echo "<p>FAIL";
	}



}
else
{
	$a="";
	$b="";
	$a1="";
	$a2="";
	$a3="";
}






$conn=mysqli_connect("localhost","root","","mm");




if($conn)
{
	echo "<p>connection success<p>";
}

else
{
	echo "connection not success<p>";
}


$a=$_POST['y1'];
$b=$_POST['y2'];
$c=$_POST['y3'];
$d=$_POST['y4'];
$e=$_POST['y5'];
$f=$_POST['y6'];
$g=$_POST['y7'];
$h=$_POST['y8'];
// echo  "<p>$name";

// echo "<p>$password";


$q="select * from m1 where  name='$b'";


 
$result=mysqli_query($conn,$q);

$a=mysqli_num_rows($result);

if($a==1)
{
	echo "name is already exits";
}
else
{
	$register="insert into m1 (id,name,course,m1,m2,total,persentage,grade)values('$a','$b','$c','$d','$e','$f','$g','$h')";
	mysqli_query($conn,$register);

}



?>