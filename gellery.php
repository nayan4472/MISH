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
  height: 25rem;
  position: relative;
}

.gallery .box-container .box img{
  height: 200%;
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

.gallery .box-container .box:hover .content{
  top:0;
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
   margin-top: 1rem;
   color:white;
   font-size: 1.7rem;
   padding:1rem 3rem;
   cursor: pointer;
}

.btn:hover{
   background: orange;
}
   </style>
</head>
<body style="background-color:red">

   <!-- header section starts  -->

<section class="header">

  <center> <a href="home.php" class="logo"> YM Fashion</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="cart.php">🛒</a>
      <a href="book.php">book</a>
      <a href="gallery.php">gallery</a>
      <a href="feedback.php">contact us</a>
      <a href="logout.php">logout</a>
  </nav>
</center>
   </nav>


</section>

<!-- section 1 starts -->

<div class="heading" style="background:url(gelery/header-bg-1.png) no-repeat">
   <h1>gallery</h1>
</div>
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <div class="box-container">

        <div class="box">
            <img src="images/k6.jpg" alt="">
            <div class="content">
                <h3>Kids Wear</h3>
                <!-- <p>Best place to enjoy the beach or the water</p> -->
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/k4.jpg" alt="">
            <div class="content">
                <h3>Kids Wear</h3>
                
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/l8.png" alt="">
            <div class="content">
                <h3>Women Wear</h3>
                
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/m2.jpeg" alt="">
            <div class="content">
                <h3>Men Wear</h3>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/m6.jpg" alt="">
            <div class="content">
                <h3>Men Wear</h3>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/m5.jpg" alt="">
            <div class="content">
                <h3>Men Wear</h3>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/l7.jpg" alt="">
            <div class="content">
                <h3>Women Wear</h3>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/l6.jpg" alt="">
            <div class="content">
                <h3>Women Wear</h3>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/k9.jpg" alt="">
            <div class="content">
                <h3>Kids Wear</h3>
                <a href="#" class="btn">see more</a>
            </div>
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
                  <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                  <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>     
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

   <div class="credit"> <b>created by <span>  Yash & Mita</b></span> | all
   rights reserved! </div>

</section>


      </div>
   </section>
<!-- footer ends -->
</body>
</html>

<!-- hello -->