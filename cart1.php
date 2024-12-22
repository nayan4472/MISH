<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>home</title>
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" type="text/css" href="style.css">
   <style type="text/css">
    .header{
   border-bottom: 2px solid black;
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
  height: 50rem;
  width:100%;
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
h1 
{
    font-size: 50px;
}

   </style>

</head>

<body style="background-color:skyblue">
<!-- header section starts  -->

<section class="header" style="background: white;">

   <a href="home.php" class="logo"><h1><u><center><u> ¥ℳ YM Fashion</u></center></u></h1></a>

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

   <h1 class="heading-title">Trading</h1>

   <div class="box-container">

        <div class="box">
            <img src="images/l2.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa--marker-alt"></i> KLOSIA CREATION </h3>
                <!-- <p>KLOSIA Women Pure Cotton Printed Stright Kurta with Pant<br>& Dupatta.</p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 2000.00 <span>5000.00</span> </div>
                <a href="book.php" class="p-btn">shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/l8.png" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Western Dress </h3>
                <!-- <p>Hawaii is a group of volcanic islands in the <br>central Pacific Ocean. </p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 3500.00 <span>5000.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/l6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Gown </h3>
                <!-- <p>A city of iconic attractions and brilliant beaches,<br> Sydney is a destination you'll never forget.</p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 2500.00 <span>3300.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/l5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Lasha </h3>
                <!-- <p>Japan is known for everything from onsen <br>hot springs and kabuki baths</p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 2000.00 <span>3000.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/m5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Trouser </h3>
                <!-- <p>Tokyo is known for iconic landmarks like the Tokyo <br>Skytree and Shibuya Crossing.</p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 6000.00 <span>8000.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/m2.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Shervani </h3>
                <!-- <p>The Emerald island. The first thing Ireland is famous <br>for is the island itself and its shades of green! </p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 7000.00 <span>8500.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>



         <div class="box">
            <img src="images/m6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Casual</h3>
                <!-- <p>Mumbai, previously known as Bombay is one of the most <br>populous and biggest cities of Maharashtra.</p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 5000.00 <span>7000.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/m3.png" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Formal </h3>
                <!-- <p>New Zealand is a country of stunning and natural<br>beauty:jagged mountains, pristine trout-filled lakes.</p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 7500.00 <span>9500.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/k2.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kurta & Dhoti </h3>
                <!-- <p>Dubai (دبي) is one of the seven emirates that make up <br>the United Arab Emirates. With shape like a slant rectangle,</p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 10000.00 <span>15000.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/k5.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Traditional </h3>
                <!-- <p>Paris is one of the most beautiful cities.It has <br>a reputation of being a romantic and cultural city.</p>
 -->                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 5000.00 <span>8000.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/k7.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Jeans & T-shirt </h3>
                <!-- <p>Tokyo is known for iconic landmarks like the Tokyo <br>Skytree and Shibuya Crossing.</p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 6000.00 <span>8500.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/k6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Jackets </h3>
                <!-- <p>Egypt is very famous for its ancient civilization and the <br>monuments of the majestic pharaohs,</p> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 5500.00 <span>8500.00</span> </div>
                <a href="book.php" class="p-btn">Shop now</a>
            </div>
        </div>
    </div>

</section>

<!-- for adding packages from database -->

   <?php

 include 'configg.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
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
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
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
            <input type="submit" class="btn" value="shop now" name="add_to_cart">
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

   <div class="credit"> created by <span>Mohit , Krutanshu and Abhishek</span> | all rights reserved! </div>

</section>


      </div>
   </section>
<!-- footer ends -->
</body>
</html>