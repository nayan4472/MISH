<?php

include 'home11.php';

if(isset($_POST['add_product']))
{
   
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/'.$p_image;

   $insert_query = mysqli_query($conn, "INSERT INTO `home1`(image) VALUES( '$p_image')") or die('query failed');

   if($insert_query)
   {
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'Item add succesfully';
   }
   else
   {
      $message[] = 'could not add the Item';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `home1` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:home1.php');
      $message[] = 'Item has been deleted';
   }
   else
   {
      header('location:home1.php');
      $message[] = 'Item could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
    $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `home1` SET  image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'Item updated succesfully';
      header('location:home1.php');
   }else{
      $message[] = 'Item could not be updated';
      header('location:home1.php');
   }

}

?>

 <!-- HTML CODE START -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>YM Fashion</title>
   <link rel="icon" href="images/y8.jpg">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="csss/style.css">
   <link href="stylee.css" rel="stylesheet" type="text/css" />
 <style>
    body {
    
      background-image: url(images/a.jpg); 
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;
}
.yash
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

<?php include 'headerr.php'; ?>

<div class="container">

<section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>Add a new Item</h3>
     <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" >
   <input type="submit" value="add the Item" name="add_product" class="btn">
</form>

</section>

<section class="display-product-table">

   <table>

      <thead>
         <th>Item image</th>
                <th>action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `home1`");
            if(mysqli_num_rows($select_products) > 0)
            {
               while($row = mysqli_fetch_assoc($select_products))
               {
         ?>

         <tr style="background: white;">
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td>
               <a href="home1.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
               <a href="home1.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
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
      $edit_query = mysqli_query($conn, "SELECT * FROM `home1` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0)
      {
         while($fetch_edit = mysqli_fetch_assoc($edit_query))
         {
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
          <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the prodcut" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?> 

</section>

</div>
<!-- custom js file link  -->
<script src="js/script.js"></script>
<center><td><a href="gallery222.php" class="yash"> <h1>BACK</h1></a></td></center>

</body>
</html>