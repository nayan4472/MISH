<?php 

$con=mysqli_connect("localhost","root","","web");

if($con)
{

}
else
{

}
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$total=$s1+$s2+$s3;
$per=$total/3;



if($per <=100 && $per>80 )
	{
		$g="A";
		
	}
	else if($per<=80 && $per>70 )
	{
		$g="B";
		 
	}
	else if($per<=70 && $per>60 )
	{
		$g="C"; 
		
	}
	else if($per<=60 && $per>50 )
	{
		$g="D"; 
		
	}
	else
	{
		$g="Fail";
		
	}




$q="insert into marksheet(rollno,name,s1,s2,s3,total,per,g)values('$rollno','$name','$s1','$s2','$s3','$total','$per','$g')";

$result=mysqli_query($con,$q);

if($result>0)
{
	//echo "data insert success";

	$select="select * from marksheet";
	$getdata=mysqli_query($con,$select);
	$num=mysqli_num_rows($getdata);

	if($num>0)
	{
		echo "<table  style='border : 1px solid red; color:;background-color:blue;'>";
		echo "<tr><td> Rollno </td><td>Name</td><td>s1</td><td>s2</td><td>s3</td><td>total</td><td>persentage</td><td>Grade</td></tr>";

		while($row=mysqli_fetch_assoc($getdata))
		{
			echo"<tr style='border : 1px solid green'><td>".$row['rollno']."</td>
			<td>".$row['name']."</td>
			<td>".$row['s1']."</td>
			<td>".$row['s2']."</td>
			<td>".$row['s3']."</td>
			<td>".$row['total']."</td>
			<td>".$row['per']."</td>
			<td>".$row['g']."</td></tr>";
		}
		echo "</table>";
	}
}
else
{
	echo "data not insert";
}


?>