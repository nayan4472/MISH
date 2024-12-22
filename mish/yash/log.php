<?php  

session_start();


$conn=mysqli_connect("localhost","root","","yash");




if($conn)
{
	//echo "connection success<p>";
}

else
{
	//echo "connection not success<p>";
}


$name=$_POST['y1'];
$password=$_POST['y2'];

$q="select * from reg where uname='$name' &&  password='$password'";


 
$result=mysqli_query($conn,$q);

$num=mysqli_num_rows($result);

if($num==1)


{

	$_SESSION['uname']=$name;
	header('location:home.php');
}
else
{
	echo "Invalid username and password";
}




?>