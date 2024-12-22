<?php
include("setting.php");
session_start();
// if(!isset($_SESSION['aid']))
// {
// 	header("location:admin.php");
// }
$aid=$_SESSION['aid'];
$a=mysqli_query($al, "SELECT * FROM admin23 WHERE aid='$aid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YM Fashion</title>
<link href="stylee.css" rel="stylesheet" type="text/css" />
<style>
body {
    background-image: url(images/bg.jpg);
    margin: 80px;
}

p
{
  font-size:50px;
}
</style>
</head>

<body>
<div id="header">
  <div align="center"> <span class="headingMain">YM Fashion</span> </div>
</div>
<br />
<br />
<div align="center"> <span class="subHead"><p>Welcome</p><?php echo $name;?></span> 
  <table border="0">
<tr>
  <td>  <a href="adminn.php" class="cmd">♦ 	Add  Item </a></td>
  <!-- <td><a href="changePasswordAdmin.php" class="cmd">♦ Change Password</a></td> -->
</tr>

<tr>
  <td><a href="adminn.php" class="cmd">♦ Update Item</a></td>

</tr>
<tr>
  <td>  <a href="adminn.php" class="cmd">♦ Remove Item</a></td>
</tr>

<tr>
    <td><a href="logout.php" class="cmd">♦ Logout</a></td>
</tr>
</table>
</div>

<div>


</div>
</body>
</html>