<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<!-- 	<style>

		.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style> -->

	</style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>



 <div class="search-container">
 	
  
   	<form method="POST" action=""> 
   
   
      <input type="text" placeholder="Search here..." name="name">
      
      <button type="submit"><i class="fa fa-search"></i></button>
    

  </div>


<?php
	$name=$_POST['name'];
  if($name=="men wear")
  {
  	header("Location:trekking.php");
  }
   if($name=="women wear")
  {
  	header("Location:adventure.php");
  }
   if($name=="kids wear")
  {
  	header("Location:camfire.php");
  }
  if($name=="")
  {
  	

  	 echo "<script>alert('You choose wrong wear.')</script>";
  }
  
?>
 </form>
</body>
</html>