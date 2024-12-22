<?php 


$con=mysqli_connect("localhost","root","","web");
if($con)
{
	echo "yash";
}
else
{
	echo "no";
}

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$date=$_POST['date'];
	$image=$_FILES['image']['name'];
	if(file_exists("upload/".$_FILES['image']['name']))
	{
		$store=$_FILES["image"]["name"];
		//$_SESSION['status']="image alreadey exits.'$store'";
		//header('location:index.php');
	}
	else
	{
		$insert="insert into user_photo(fname,lname,date,image)values('$fname','$lname','$date','$image')";
		$result=mysqli_query($con,$insert);

		if($result)
		{
			move_uploaded_file($_FILES['image']['tmp_image'],'upload/'.$_FILES["image"]["name"]);
		}
		echo $result;
		if($result>0)
{
	//echo "data insert success";

	$select="select * from user_photo";
	$getdata=mysqli_query($con,$select);
	echo $getdata;
	$num=mysqli_num_rows($getdata);

	if($num>0)
	{
		echo "<table  style='border : 1px solid red; color:;background-color:blue;'>";
		echo "<tr><td> ID </td><td>fname</td><td>lname</td><td>date</td><td>image</td></tr>";

		while($row=mysqli_fetch_assoc($getdata))
		{
			echo"<tr style='border : 1px solid green'><td>".$row['id']."</td>
			<td>".$row['fname']."</td>
			<td>".$row['lname']."</td>
			<td>".$row['date']."</td>
			<td>".$row['image']."</td>
			</tr>";
		}
		echo "</table>";
	}
}
else
{
	echo "data not insert";
}
	}




	
}
 
?>