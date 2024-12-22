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
   position: sticky;
   top:0; left:0; right:0;
   /*z-index: 1000;*/
   background-color: white;
   display: flex;
   padding-top: 2rem;
   padding-bottom: 2rem;
   box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 1);
   align-items: center;
   justify-content: space-between;
   
}
.header{
   border-bottom: 2px solid black;
}

.header .logo{
   font-size: 2.5rem;
   color:black;
}

.header .navbar a{
   font-size: 2rem;
   margin-left: 2rem;
   color:black;
}

.header .navbar a:hover{
   color:#8e44ad;
}

.about{
   display: flex;
   align-items: center;
   flex-wrap: wrap;
   gap:3rem;
}

.about .image{
   flex:1 1 41rem;
}

.about .image img{
   width: 800px;
   height:500px;
   margin-left:25px;
   margin-top:50px;
}

.about .content{
   flex:1 1 41rem;
   text-align: center;
}

.about .content h3{
   font-size: 3rem;
   color:var(--black);
}

.about .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
}

.about .content .icons-container{
   margin-top: 2rem;
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
   align-items: flex-end;
}

.about .content .icons-container .icons{
   background: var(--light-bg);
   padding:2rem;
   flex:1 1 16rem;
}

.about .content .icons-container .icons i{
   font-size: 4rem;
   margin-bottom: 2rem;
   color:var(--main-color);
}

.about .content .icons-container .icons span{
   font-size: 1.5rem;
   color:var(--light-black);
   display:block;
}

.reviews{
   background: var(--light-bg);
}

.reviews .slide{
   padding:2rem;
   border:var(--border);
   background: var(--white);
   text-align: center;
   box-shadow: var(--box-shadow);
   user-select: none;
}

.reviews .slide .stars{
   padding-bottom: .5rem;
}

.reviews .slide .stars i{
   font-size: 1.7rem;
   /* color:var(--main-color); */
   color:orange;
}

.reviews .slide p{
   font-size: 1.5rem;
   /* color:var(--light-black); */
   color:skyblue;
   text-shadow:1px 1px blue;
   line-height: 2;
   padding:1rem 0;
}

.reviews .slide h3{
   font-size: 2rem;
   /* color:var(--black); */
   color:blue;
   text-shadow:2px 2px skyblue;
   

}

.reviews .slide span{
   font-size: 1.5rem;
   color:var(--main-color);
   display: block;
}

.reviews .slide img{
   height: 20rem;
   width: 20rem;
   border-radius: 50%;
   margin-top: 1rem;
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
body 
{
   background-color:skyblue;
}
.image 
{
   display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
  border:1rem solid #fff;
  border-radius: .5rem;
  flex:1 1 41rem;
  /* height: 25rem; */
  height:600px;
  
  position: relative;

}

   </style>
</head>

<body>
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><center><img src="images/y8.jpg" width="40px" height="40px"> YM Fashion</center></a>

   <nav class="navbar">
   <a href="home.php">home</a>
   
            <a href="about.php">About</a>
           
            <a href="book.php">Shop</a>
            <a href="gallery.php">Gallery</a>


            <a href="cart.php">🛒</a>
            <a href="feedback.php">Feedback</a>
            <a href="logout.php">Logout</a>
   </nav>


</section>

<!-- header end -->

<!-- section -->
<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>


<!-- about section starts  -->

<section class="about">

   <div class="image">
   

      

 <?php 
    	$con=mysqli_connect("localhost","root","","about1");

    	$q = mysqli_query($con, "SELECT * FROM `about1`");
    	if(mysqli_num_rows($q) > 0)
            {
               while($row = mysqli_fetch_assoc($q))
               {
         ?>
        <td><img src="images/<?php echo $row['image']; ?>" class="d-block w-100" style="height: 200px; width:200px"></td>       
         <?php
            };    
            }
            else
            {
               echo "<div class='empty'>no Item added</div>";
            };
         ?>
   
      
                 



                     
                        </div>

   <div class="content">
      <h3 style="color:blue"> ⁘⁘ why choose us ? ⁘⁘</h3>
  <h2><p style="color:blue">⁘   Our Website provides you products in best price, discount and with best quality.</p>
      <p style="color:blue">⁘   We have many branches of YM Fashion in many areas.</p>
      <p style="color:blue">⁘   As you can see we have reached at top 5 reviews.</p>
      <p style="color:blue">⁘   We are since 2000.</p>
      <p style="color:blue">    🙏🙏 We are thanking you to visit our website. 🙏🙏 </p></h2>
      <p> </p>
      <p>
         <p>
            <p>
         <div class="icons-container">
            
         <div class="icons">
         <img src="images/y4.jpg" alt="">
         </div>

         <div class="icons">
         <img src="images/y1.jpg" alt="">
         </div>

         <div class="icons">
         <img src="images/y2.jpg" alt="">
         </div>

      </div>
   </div>

</section>

<!-- about section ends -->


<!-- reviews section starts  -->

<section class="reviews">

   <center><h1 class="heading-title"> ⭐⭐ Customers Reviews ⭐⭐ </h1></center>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
  <h3>Khalas Yash</h3>
            <span>Owner</span>
            <img src="images/yash.jpg" alt="">
            <p>🔷 Our website provide best discount & quality. 🔷</p>
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
     <h3>Mita Kanzariya</h3> 
            <span>Owner</span>
            <img src="images/mita.jpg" alt="">
            <p>🔷 Our Y.M Fachion provide to customer good services and customers convenience product is good & value for money..🔷</p>
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
 <h3>Mihir Vaghela</h3> 
            <span>Customer</span>
            <img src="images/mihi.jpg" alt="">
            <p>🔷Your secutiry features & easy website use and your cloth are too good.🔷</p>

         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
    <h3>Hakim Khadija</h3> 
            <span>Customer</span>
            <img src="images/khadi.jpg" alt="">
            <p>🔷I received my parcel just now thank you.All the clothes are beautiful. I am very happy with the quality and will feeback on your website.🔷</p>

         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            
            <h3>Henil Shah</h3>
            <span>Customer</span>
            <img src="images/henil.jpg" alt="">
            <p>🔷Service is good.I got delivery on a time.🔷</p>
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
   <h3>Ekta Panday</h3> 
            <span>Customer</span>
            <img src="images/ekta.jpg" alt="">
            <p>🔷The clothe's material is nice and amazing. I am so happy with what i got today the delivery was so fast too will ordering again from you thanks for the good service.🔷</p>
         </div>
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
   <h3>Nayan Pitroda</h3> 
            <span>Customer</span>
            <img src="images/nay.jpg" alt="">
            <p>🔷I received my parcel on at a day and quality is good will buy again.🔷</p>
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->



<!-- footer starts -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
              <h3>quick links</h3>
                  <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                  <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                  <a href="cart.php"> <i class="fas fa-angle-right"></i> 🛒</a>
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