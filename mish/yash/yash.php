<?php 


$con=mysqli_connect('localhost','root','','user');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];

if(!$con)
{
	echo "connection lost";
}
else
{
	echo "connection ok";
}
  

 $insert="insert into user(fname,lname,email,password) values('$fname','$lname','$email','$password')";

   $result=mysqli_query($con,$insert);

if($result>0)
{
	//echo "data insert success";

	$select="select * from user";
	$getdata=mysqli_query($con,$select);
	$num=mysqli_num_rows($getdata);

	if($num>0)
	{
		echo "<table  border : '1'>";
		echo "<tr><td> fname </td><td>lname</td><td>email</td><td>password</td></tr>";

		while($row=mysqli_fetch_assoc($getdata))
		{
			echo"<tr style='border : 1px solid green'><td>".$row['fname']."</td>
			<td>".$row['lname']."</td>
			<td>".$row['email']."</td>
			<td>".$row['password']."</td>
			</tr>";
		}
		echo "</table>";
	}
}

?>