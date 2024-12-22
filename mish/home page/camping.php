<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>🏠 Home 🏠</title>
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
   align-items: center;
   justify-content: center;
}
.header{
   border-bottom:2px solid black;
}
.heading h1{
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
  height: 500px;
  position: relative;
}

.gallery .box-container .box img{
  height: 600px;
  width:100%;
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

/*.gallery .box-container .box:hover .content{
  top:0;
}

.gallery .box-container .box .content h3{
  font-size: 2.5rem;
  color:var(--orange);
}
*/
.gallery .box-container .box .content p{
  font-size: 1.5rem;
  color:#eee;
  padding:.5rem 0;
} 
h1 
{
   color:red;
   font-size:50px;
}
 .h 
{
   color:red;
}
body 
{
   background-color:skyblue;
}
   </style>
</head>
<body>

   <!-- header section starts  -->

   <section class="header">



<a href="home.php" class="logo" id=""><img src="images/y8.jpg" width="40px" height="40px"> YM Fashion</a>

<nav class="navbar">
<a href="home.php">Home</a>
   <a href="about.php">About</a>
  
   <a href="book.php">Shop</a>
   <a href="gallery.php">Gallery</a>


   <a href="cart.php">🛒</a>
   <a href="feedback.php">Feedback</a>
   <a href="logout.php">Logout</a>

   </div>
</section>


<!-- section 1 starts -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
  <center> <h1 class="h">Traditional Kids Wear</h1></center>
</div>
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <div class="box-container">

        <div class="box">
            <img src="images/kidtra1.jpg" alt="">
            
        </div>
        <div class="box">
            <img src="images/kidtra2.jpg" alt="">
                   </div>
        <div class="box">
            <img src="images/kidtra3.jpg" alt="">
           
        </div>
        <div class="box">
            <img src="images/kidtra4.jpg" alt="">
           
        </div>
        <div class="box">
            <img src="images/kidtra5.jpg" alt="">
           
        </div>
        <div class="box">
            <img src="images/kidtra6.jpg" alt="">
            
        </div>
        <div class="box">
            <img src="images/k1.webp" alt="">
            
        </div>
        <div class="box">
            <img src="images/k2.webp" alt="">
            
        </div>
        <div class="box">
            <img src="images/kidtra8.jpg" alt="">
           
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
         <a href="cart.php"> <i class="fas fa-angle-right"></i>🛒</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i>shop</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>Contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91 8347727949 </a>
      
         <a href="#"> <i class="fas fa-envelope"></i> yashkharva506@gmail.com  </a>
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

   <div class="credit"> Created by <span>Yash, Mita & Nayan </span> | all rights reserved! </div>

</section>


      </div>
   </section>
<!-- footer ends -->
</body>
</html>

<!-- hello -->