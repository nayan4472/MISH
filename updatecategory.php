<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="stylee.css" rel="stylesheet" type="text/css" />

<link href="bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="stylee.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
</head>
<body>
<!--header-->
<!--sticky-->


<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="update category set Cat_name='" . $_POST["t2"] ."' where Cat_id='" . $_POST["t1"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
}
?>







<form method="post">
<table border="0" width="500px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update Category</td></tr>
<tr><td class="lefttxt">Selected Category Name</td><td>
	<select name="t1" required/><option value="">Select</option>



<?php
$cn=makeconnection();
$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["t1"])
	{
		echo"<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
}
mysqli_close($cn);



?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from category where Cat_id='" .$_POST["t1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Cat_id=$data[0];
$Cat_name=$data[1];


mysqli_close($cn);

}

?>

</td></tr>
<tr><td class="lefttxt">Category Name</td><td><input type="text"   value="<?php if(isset($_POST["show"])){ echo $Cat_name ;} ?>" name="t2" required pattern="[a-zA-z _]{3,10}" title Please Enter Only Characters between 3 to 10 for Category Name/></td></tr>

<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>
	<button><td><a href="cat_home.php" class="cmd"> BACK</a></td></button>
</table>
</form>
</div>


</div>
</body>
</html>


