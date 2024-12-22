<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>YM Fashion</title>
   <link rel="icon" href="images/y8.jpg">
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" type="text/css" href="style.css">
   <style type="text/css">
    .header{
   border-bottom: 2px solid black;
   height:100px;
   width:100%;
   
}
.logo 
{
   
}
      .heading{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 10rem;
   padding-bottom:15rem;
   display: flex;
   align-items: center;
   justify-content: center;
}
.heading h1{
   font-size: 10rem;
   text-transform: uppercase;
   color:var(--white);
   text-shadow: var(--text-shadow);
}
.packages .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:2rem;
  padding: 3rem;
}

.packages .box-container .box{
  flex:1 1 31rem;
  border-radius: .5rem;
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
}

.packages .box-container .box img{
  height: 250px;
  width:150px;
  object-fit: cover;
}

.packages .box-container .box .content{
  padding:2rem;
}

.packages .box-container .box .content h3{
  font-size:2rem;
  color:#333;
}

.packages .box-container .box .content h3 i{
  color:var(--orange);
}

.packages .box-container .box .content p{
  font-size:1.45rem;
  color:#666;
  padding:1rem 0;
}

.packages .box-container .box .content .stars i{
  font-size:1.7rem;
  color:orange;
}

.packages .box-container .box .content .price{
  font-size: 2rem;
  color:#333;
  padding-top: 1rem;
}

.packages .box-container .box .content .price span{
  color:#666;
  font-size: 1.5rem;
  text-decoration: line-through;
}
.p-btn{
   display: inline-block;
   background: black;
   margin-top: 1rem;
   color:white;
   font-size: 1.7rem;
   padding:1rem 3rem;
   cursor: pointer;
}

.p-btn:hover{
   background: purple;
}

 .yash1
 {
   margin-top:20px;
   width:40px;
   height:40px;
 }

   </style>

</head>

<body style="background-color:skyblue">
<!-- header section starts  -->

<section class="header" style="background: white;">

   <!-- <a href="home.php" class="logo"> YM Fashion</a> -->
   <h5><a href="home.php" class="logo"><img src="images/y8.jpg" class="yash1" width="40px" height="40px"> YM Fashion </a></h5>


   <nav class="navbar">
    <center> <h1> <a href="home.php">Home</a>
            <a href="about.php">About</a>
           
            <a href="book.php">Shop</a>
            <a href="gallery.php">Gallery</a>


            <a href="cart.php">🛒</a>
            <a href="feedback.php">Feedback</a>
            <a href="logout.php">Logout</a>  </h1> </center>
   </nav>


</section>

<!-- header end -->

<!-- section -->
<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>Shopping</h1>
</div>

<!-- section -->


<!-- packages section starts  -->

<section class="packages">

   <!-- <h1 class="heading-title">Trading</h1> -->

   <!-- 
<!-- for adding packages from database -->

   <?php

 include 'configg.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `product22` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart22`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="csss/style.css">
   <style type="text/css">
       img{
        height: 500px;
        width: 310px;
       }
   </style>

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'headerr.php'; ?>

<div class="container">

<section class="products">

   <!-- <h1 class="heading">latest packages</h1> -->

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `product22`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="book.php" method="post">
         <div class="box" style="background: white;">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">₹<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="Shop now" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html> 
<!-- adding packages -->
<!-- packages section ends -->
<!-- footer starts -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
              <h3>quick links</h3>
                  <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                  <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                  <a href="cart.php"> <i class="fas fa-angle-right"></i>🛒</a>
                  <a href="book.php"> <i class="fas fa-angle-right"></i> shop</a>     
         </div>

          <div class="box">
               <h3>extra links</h3>
               <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
               <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
               <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
               <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
               <h3>contact info</h3>
               <a href="#"> <i class="fas fa-phone"></i> +91 8347727949 </a>
               
               <a href="#"> <i class="fas fa-envelope"></i> yashkharva506@gmail.com </a>
               <a href="#"> <i class="fas fa-map"></i> gujarat, india - 382443 </a>
            </div>

            <div class="box">
               <h3>follow us</h3>
               <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
               <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
               <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

   </div>

   <center>
            <marquee width="300px" direction="left" height="200px">
         <div class="credit"> created by <span>Yash , Mita & Nayan </div>
         </marquee>
         </center>
</section>


      </div>
   </section>
<!-- footer ends -->
</body>
</html>