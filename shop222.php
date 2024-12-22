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
   <link rel="icon" href="images/y8.jpg">
<link href="stylee.css" rel="stylesheet" type="text/css" />
<style>
body {
    background-image: url(images/bg.jpg);
    margin: 20px;
}

p
{
  font-size:10px;
}
.subHead 
{
  color:white;
  
  text-shadow:5px 5px lime;
}
h1
{
  font-size:80px;
}
a.cmd:link{font-family:"Segoe UI";font-size:20px;color:lime;text-decoration:none;padding:10px;border-radius:10px;}
a.cmd:active{font-family:"Segoe UI";font-size:20px;color:red;text-decoration:none;}
a.cmd:visited{font-family:"Segoe UI";font-size:20px;color:white;text-decoration:none;}
a.cmd:hover{font-family:"Segoe UI";font-size:20px;color:lime;text-decoration:none;}
a.cmd 
{
  text-shadow:3px 3px blue;
}

.headingMain
{
  text-shadow:2px 4px blue;
  font-size:50px;
  text-decoration:bold;
 
}
#header
{
  margin-bottom:px;
  padding:20px;
  border:5px solid blue;
}
h2 
{
  font-size:70px;
}
.yash
{
   color:green;
   font-size:50px;
   text-shadow:4px 4px lime;
   
}
a
{
    text-decoration:none;
}

h1{
		transition: 0.10s ease;
	}
	h1:hover{
		transform: scale(1.04);
	}

</style>
</head>

<body>
<div id="header">
  <div align="center"> <span class="headingMain"><img src="images/y8.jpg" width="40px" height="45px">    YM Fashion</span> </div>
</div>
<br />
<br />
<div align="center"> <span class="subHead"><h2>Shop</h2><?php echo $name;?></span> 
  <table border="0">
  <tr>
  <td>  <a href="obook.php" class="cmd">♦ Order Booking Details</a></td>
</tr>
<tr>
  <td>  <a href="ocancel1.php" class="cmd">♦ Order Cancelling Details</a></td>
</tr>

</table>
</div>

<div>


</div>
<!-- custom js file link  -->
<script src="js/script.js"></script>
<center><td><a href="ahome.php" class="yash"> <h1>BACK</h1></a></td></center>

</body>
</html>