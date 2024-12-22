
 
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
   .heading{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 10rem;
   padding-bottom:15rem;
   display: flex;
   box-shadow: 5px;
   align-items: center;
   justify-content: center;
}
.header{
   border-bottom: 2px solid black;
}

/*.heading {
   
         position: sticky;         
         left: 0;
         right: 0;
         z-index: 1000;
         background-color: white;
         display: flex;
         padding-top: 0.7rem;
         padding-bottom: 1rem;
         box-shadow: 5px;
         align-items: center;
         justify-content: space-between;
         padding-right: 5rem;
         padding-left: 10rem;
      }*/

.heading h1
{
   font-size: 10rem;
   text-transform: uppercase;
   color:var(--white);
   text-shadow: var(--text-shadow);
} 
      .gallery .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.gallery .box-container .box{
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
  border:1rem solid #fff;
  border-radius: .5rem;
  flex:1 1 41rem;
  /* height: 25rem; */
  height:600px;
  
  position: relative;
}

.gallery .box-container .box img{
  height: 600px;
  width:500px;
  object-fit: cover;
}

.gallery .box-container .box .content{
  position: absolute;
  top:-100%; left:0;
  height: 100%;
  width:100%;
  text-align: center;
  background:rgba(0,0,0,.7);
  padding:2rem;
  padding-top: 5rem;
}

.gallery .box-container .box:hover .content{
  top:20px; 
   
}

.gallery .box-container .box .content h3{
  font-size: 2.5rem;
  color:orange;
  
}

.gallery .box-container .box .content p{
  font-size: 1.5rem;
  color:#eee;
  padding:.5rem 0;
}
.btn{
   display: inline-block;
   background: var(--black);
   margin-top: 350px;
   color:white;
   font-size: 1.7rem;
   padding:1rem 3rem;
   cursor: pointer;
}

.btn:hover{
   background: orange;
}

/*.a 
{

   font-size: 50px;
}*/

h1 
{
    font-size: 50px;
}
body 
{
   background-color:skyblue;
}
.box 
{
    width:450px;
    margin:5px;
}
.box-container 
{
   
}
.gallery
{
    
}
</style>
</head>
<body>

   <!-- header section starts  -->

   <section class="header">

<h1><a href="home.php" class="logo"><img src="images/y8.jpg" width="40px" height="40px"> YM Fashion </a></h1>

<nav class="navbar">
<a href="home.php">Home</a>
         <a href="about.php">About</a>
        
         <a href="book.php">Shop</a>
         <a href="gallery.php">Gallery</a>


         <a href="cart.php">🛒</a>
         <a href="feedback.php">Feedback</a>
         <a href="logout.php">Logout</a>
</nav>



</section>


<!-- section 1 starts -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <center><h1>gallery</h1></center>
</div>
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <div class="box-container">



        <?php

include 'home11.php';

if(isset($_POST['add_to_cart'])){

  $product_name = $_POST['product_name'];
  
  $product_image = $_POST['product_image'];
  

  $select_cart = mysqli_query($conn, "SELECT * FROM `home1` WHERE name = '$product_name'");

  if(mysqli_num_rows($select_cart) > 0)
  {
     $message[] = 'product already added to cart';
  }
  else
  {
     $insert_product = mysqli_query($conn, "INSERT INTO `home2`(name, image ) VALUES('$product_name',  '$product_image' )");
     $message[] = 'product added to cart succesfully';
  }

}

?>

  <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `home1`");
      if(mysqli_num_rows($select_products) > 0)
      {
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?> 

      <form action="home1.php" method="post">
         <div class="box" style="background: white;">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3> 
              <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
              <div class="content">
                    <a href="camping.php" class="btn">see more</a>
            </div>
             <!-- <input type="submit" class="btn" value="" name="add_to_cart">  -->
         </div>
      </form>

      <?php
     };
      };
      ?>
 </div>


    </div>

</section>


<!-- gallery section ends -->
   <!-- footer starts -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
              <h3>quick links</h3>
                  <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                  <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                  <a href="cart.php"> <i class="fas fa-angle-right"></i> 🛒</a>
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
    
               <a href="#"> <i class="fas fa-phone"></i> +91 8347727949</a>
               <a href="#"> <i class="fas fa-envelope"></i> yashkharva506@gmail.com </a>
               <a href="#"> <i class="fas fa-map"></i> gujarat, india - 400104 </a>
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

<!-- hello -->