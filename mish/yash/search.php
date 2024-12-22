<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
	<title></title>
</head>
<body>


<form method="POST">
	<table class="table table-dark table-striped">
  
<tr>
<td>Roll No.:
</td>
<td>
	<input type="text" name="rollno">
</td>
</tr>
<td>
	<input type="submit" name="sub" value="submit">
	</td>



</form>
<?php 

$con=mysqli_connect("localhost","root","","web");
$rollno=$_POST['rollno'];
$search="select * from marksheet where rollno='$rollno'";
$result=mysqli_query($con,$search);
$num=mysqli_num_rows($result);
if($num>0)
{
	$row=mysqli_fetch_assoc($result);
	echo "<table width='50%' border='1'>";
	echo "<tr>";
	echo "<td>rollno</td>";
	echo "<td>".$row['rollno']."</td></tr>";
	echo "<tr>";
	echo "<td>name</td>";
	echo "<td>".$row['name']."</td></tr>";
	echo "<tr>";
	echo "<td>s1</td>";
	echo "<td>".$row['s1']."</td></tr>";
	echo "<tr>";
	echo "<td>s2</td>";
	echo "<td>".$row['s2']."</td></tr>";
	echo "<tr>";
	echo "<td>s3</td>";
	echo "<td>".$row['s3']."</td></tr>";
	echo "<tr>";
	echo "<td>total</td>";
	echo "<td>".$row['total']."</td></tr>";
	echo "<tr>";
	echo "<td>per</td>";
	echo "<td>".$row['per']."</td></tr>";
	echo "<tr>";
	echo "<td>grade</td>";
	echo "<td>".$row['g']."</td></tr>";
	echo "</table>";
	echo "</table>";


	
}
else
{
	echo "data not found";
}

?>
</table>
</body>
</html>