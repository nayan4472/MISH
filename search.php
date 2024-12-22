<?php

$n=$_POST['yash'];

if($n=="men wear")
{
  header("Location:trekking.php");
}
if($n=="women wear")
{
  header("Location:adventure.php");
}
if($n=="kids wear")
{
  header("Location:camfire.php");
}
else 

{
  echo "🙏😌😌 <b>Please search your cloth</b> 😌😌🙏";
}


?>
<html>
<head>
  <style>
    body
    {
      text-align:center;
      background-color:skyblue;
      font-size:45px;
      text-shadow:2px 2px lime;
      margin:300px;
      color:blue;
      text-decoration:bold;
    }
    </style>
</head>
<body>
</body>
</html>