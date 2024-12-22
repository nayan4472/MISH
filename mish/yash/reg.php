<?php 

$conn=mysqli_connect("localhost","root","","yash");




if($conn)
{
	echo "connection success<p>";
}

else
{
	echo "connection not success<p>";
}


$name=$_POST['y1'];
$password=$_POST['y2'];

// echo  "<p>$name";

// echo "<p>$password";


$q="select * from reg where uname='$name'";


 
$result=mysqli_query($conn,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "username is already exits";
}
else
{
	$register="insert into reg (uname,password)values('$name','$password')";
	mysqli_query($conn,$register);

}



?>