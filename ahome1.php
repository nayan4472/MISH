<?php

$con=mysqli_connect("localhost","root","","slider");

if(isset($_POST['change']))
{
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/'.$p_image;

   $insert_query = mysqli_query($con, "INSERT INTO `slider`(image) VALUES('$p_image')") or die('query failed');

   if($insert_query)
   {
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
   }
   else
   {
      $message[] = 'could not change';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con, "DELETE FROM `slider` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:ahome1.php');
      
   }
   else
   {
      header('location:ahome1.php');
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   $update_query = mysqli_query($con,"UPDATE `slider` SET image ='$update_p_image' WHERE id = '$update_p_id'");

   if($update_query){
      header('location:ahome1.php');
      
   }else{
      echo 'Item could not be updated';
      header('location:ahome1.php');
      
   }

}

if(isset($_POST['cancel']))
{
      header('location:ahome1.php');
}
?>

 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="text/css" href="Css/image/logo.jpg">

   <title>YM Fashion</title>
   <link rel="icon" href="images/y8.jpg">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="csss/style.css">
   <link href="stylee.css" rel="stylesheet" type="text/css" />
 <style>
    body{
  background-image: url('images/a.jpg');
}
.khm
{
   color:green;
   font-size:50px;
   text-shadow:4px 4px lime;
   
}

h1{
    transition: 0.10s ease;
  }
  h1:hover{
    transform: scale(1.04);
  }
  .add-product-form{
    background:black;
    border-radius: 15px;
  }
  .btn
  {
    background:lightsteelblue;
    border-radius:3px round;
  }
  table{
    border-radius: 20px;
  }
  .back{
   background: lightgoldenrodyellow;
   width: 300px;
   height: 45px;
   margin-left: 40%;
   font-size: 25px;
   font-family: fantasy;
   border-radius: 5px;
   border: 2px solid black;
   transition: 0.1s ease;
  }
  .back:hover{
   transform: scale(1.05);
   background: darkcyan;
   color: white;
  }
  .yash
{
   color:green;
   font-size:50px;
   text-shadow:4px 4px lime;
   
}
  </style> 
</head>
<body>
   
<?php

if(isset($message))
{
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>


<div class="container">

<!-- <section>

<form action="" method="POST" class="add-product-form" enctype="multipart/form-data">
   <h3 class="h3" style="color:white;">Change the pic</h3>
   <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg image/webp" class="box" >
   <input type="submit" value="change Photo" name="change" class="btn">
</form>

</section> -->

<section class="display-product-table">

   <table style="border-radius:15px;">

      <thead>
         <th>Image</th>
         <th>action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($con, "SELECT * FROM `slider`");
            if(mysqli_num_rows($select_products) > 0)
            {
               while($row = mysqli_fetch_assoc($select_products))
               {
         ?>

         <tr style="background: white;">
            <td><img src="images/<?php echo $row['image']; ?>" height="100"></td>
            <td>
               <a href="ahome1.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');">  delete </a>
               <a href="ahome1.php?edit=<?php echo $row['id']; ?>" class="option-btn"> update </a>
            </td>
         </tr>

         <?php
            };    
            }
            else
            {
               echo "<div class='empty'>no Item added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit']))
   {
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($con, "SELECT * FROM `home` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0)
      {
         while($fetch_edit = mysqli_fetch_assoc($edit_query))
         {
   ?>

   <form action="" method="POST" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg image/webp">
      <input type="submit" value="Change the Photo" name="update_product" class="btn">
      <input type="submit" value="cancel" name="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
      if(isset($_POST['back'])){
         header('location:adminn.php');
      }
   ?> 

</section>

</div>
<!-- custom js file link  -->
<script src="js/script.js"></script>

<center><td><a href="ahome.php" class="yash"> <h1>BACK</h1></a></td></center>

</body>
</html>