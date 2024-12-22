<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>home</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="Untitled-1.css">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <style type="text/css">
      .carousel {
         width: 2000x;
         height: 700px;
      }

      .carousel-inner>.item>img {
         width: 1120px;
         height: 900px;
      }

      .carousel-inner>.item>a>img {
         width: 90px;
      }

      .w-100 {
         width: 100% !important;
         height: 5rem;
      }

      .carousel-inner>.carousel-item>img {
         height: 90vh;
         width: 100px;
      }

      .carousel-caption>h5 {
         margin-top: 110px;
         font-size: 20px;
         color: rgba(255, 255, 255, 0.815);

      }

      .carousel-caption>.p1 {
         margin-bottom: -25px;
         font-size: 80px;
      }

      .carousel-caption>.p2 {
         /* the world */
         margin-bottom: -160px;
         font-size: 80px;
      }

      .carousel-caption>.button2 {

         /* margin-bottom: 300px; */
         display: inline-block;
         background: var(--black);
         margin: 15rem;
         color: var(--white);
         font-size: 15px;
         padding: 8px 2rem;
         cursor: pointer;
         text-decoration: none;
      }

      .button2:hover {
         background: var(--main-color);
         color: black;
      }



      /* .carousel-inner>.item {
         position: relative;
         display: none;
         -webkit-transition: 0.1s ease-in-out left;
         -moz-transition: 0.1s ease-in-out left;
         -o-transition: 0.1s ease-in-out left;
         transition: 0.1s ease-in-out left;
       } */
   </style>

</head>

<body>
   <!-- header section starts  -->



   <style type="text/css">
      * {
         font-family: 'Poppins', sans-serif;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         outline: none;
         border: none;
         text-decoration: none;
         text-transform: capitalize;
      }

      html {
         font-size: 62.5%;
         overflow-x: hidden;
      }

      /*header css starts*/
      .header {
         position: sticky;
         top: 0;
         left: 0;
         right: 0;
         z-index: 1000;
         background-color: white;
         display: flex;
         padding-top: 2rem;
         padding-bottom: 2rem;
         box-shadow: 0px;
         align-items: center;
         justify-content: space-between;
         padding-right: 20rem;
         padding-left: 10rem;
         border-bottom:2px solid black;
      }

      .header .logo {
         font-size: 2.5rem;
         color: black;
      }

      .header .navbar a {
         font-size: 2rem;
         margin-left: 2rem;
         color: black;
         text-decoration: none;
      }

      .header .navbar a:hover {
         color: purple;
      }

       #fashion {
         text-decoration: none;
      } 



      /*header css ends*/

      /*section 1 css first*/
      .home {
         padding: 0;
      }

      .home .slide {
         text-align: center;
         padding: 2rem;
         display: flex;
         align-items: center;
         justify-content: center;
         background-size: cover !important;
         background-position: center !important;
         min-height: 60rem;
      }

      .content {
         width: 100%;

      }

      .content {
         display: inline-block;
      }

      .content span {
         display: block;
         font-size: 2.2rem;
         color: white;
         padding-bottom: 1rem;
         animation: fadeIn .2s linear backwards .2s;
      }

      .content h3 {
         font-size: 6vw;
         color: var(--white);
         text-transform: uppercase;
         line-height: 1;
         text-shadow: var(--text-shadow);
         padding: 1rem 0;
         animation: fadeIn .2s linear backwards .4s;
      }

      .content .btn {
         animation: fadeIn .2s linear backwards .6s;
      }

      .btn {
         display: inline-block;
         background: var(--black);
         margin-top: 1rem;
         color: var(--white);
         font-size: 1.7rem;
         padding: 1rem 3rem;
         cursor: pointer;
      }

      .btn:hover {
         background: var(--main-color);
      }

      /*sextion 1 css ends*/

      /*section css starts*/
      .services {
         padding-right: 10rem;
         padding-left: 10rem;
         margin-top: -150px;
      }

      .services .box-container {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
         gap: 1.5rem;
      }

      .services .box-container .boxx {
         padding: 2rem 2rem;
         text-align: center;
         background: var(--main-color);
         cursor: pointer;
      }

      .services .box-container .boxx:hover {
         background: var(--black);
      }

      .services .box-container .boxx img {
         height: 7rem;
      }

      .services .box-container .boxx h3 {
         color: var(--white);
         font-size: 1.7rem;
         padding-top: 1rem;
      }

      .heading-title {
         text-align: center;
         margin-bottom: 3rem;
         font-size: 6rem;
         text-transform: uppercase;
         color: var(--black);
      }


      /*section css ends*/

      /*about  css starts*/
      .home-about {
         display: flex;
         align-items: center;
         flex-wrap: wrap;
      }

      .home-about .image {
         flex: 1 1 41rem;
      }

      .home-about .image img {
         width: 100%;
         margin-left:100px;
      }

      .home-about .content {
         flex: 1 1 41rem;
         padding: 11.8rem;

      }

      .home-about .content h3 {
         font-size: 9rem;
         color: var(--black);
         width: 100%;
         flex: 1 1 41rem;
      }

      .home-about .content p {
         font-size: 1.5rem;
         padding: 1rem;
         line-height: 3;
         /* color: var(--black); */
         color:blue;
         font-size:20px;
         text-shadow:1px 2px red;
         width: 100%;
         flex: 1 1 41rem;
      }

      .btn {
         display: inline-block;
         background: var(--black);
         margin-top: 1rem;
         color: var(--white);
         font-size: 1.7rem;
         padding: 1rem 3rem;
         cursor: pointer;
      }

      .btn:hover {
         background: var(--main-color);
      }

      /*about css ends*/

      /*packages css start*/
      .home-packages {
         background: #eee;
         margin-top: 3rem;
      }

      .heading-title {
         text-align: center;
         margin-bottom: -7rem;
         font-size: 6rem;
         text-transform: uppercase;
         color: #222;
      }

      .home-packages .box-container {
         display: grid;
         /* image in line */
         grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
         gap: 2rem;
         /* gap between image */
         padding: 10rem;
      }

      .home-packages .box-container .box {
         border: .1rem solid black;
         box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 1);
         background: #fff;
      }

      .home-packages .box-container .box:hover .image img {
         transform: scale(1.1);

         /*zoom image*/
      }

      .home-packages .box-container .box .image {
         height: 25rem;
         overflow: hidden;
         /* image dont go outside the box */
      }

      .home-packages .box-container .box .image img {
         height: 600px;
         width: 100%;
         object-fit: cover;
         /*fit the image according to border */
         transition: .2s linear;
         /*thoda smooth */
      }

      .home-packages .box-container .box .contentt {
         padding: 2rem;
         /* box mai space */
         text-align: center;
         color: pink;
      }

      .home-packages .box-container .box .contentt h3 {
         font-size: 2.5rem;
         color: black;
      }

      .home-packages .box-container .box .contentt p {
         font-size: 1.5rem;
         color: #777;
         line-height: 2;
         padding: 1rem 0;
      }


      .pk-btn {
         display: inline-block;
         background: black;
         margin-top: -1rem;
         color: white;
         font-size: 1.7rem;
         padding: 1rem 3rem;
         cursor: pointer;
         height: 40px;
      }

      .pk-btn:hover {
         background: #8e44ad;
      }

      .home-packages .load-more {
         text-align: center;
         margin-top: -7rem;
      }

      /*packges css end*/

      /*offer css starts*/
      .home-offer {
         text-align: center;

      }

      .home-offer .content {
         max-width: 70rem;
         margin: 0 auto;
      }

      .home-offer .content h3 {
         font-size: 3.5rem;
         text-transform: uppercase;
         color: var(--black);
      }

      .home-offer .content p {
         font-size: 1.5rem;
         color: var(--light-black);
         line-height: 2;
         padding: 1rem 0;
      }

      /*offer css ends*/
      /*footer css starts*/
      .footer {
         background: url(images/footer.jpg) no-repeat;
         background-size: cover;
         background-position: center;
         padding-top: 5rem;
         padding-bottom: 5rem;
      }

      .footer .box-container {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
         gap: 3rem;
         padding-left: 10rem;
      }

      .footer .box-container .box h3 {
         color: var(--white);
         font-size: 2.5rem;
         padding-bottom: 2rem;
      }

      .footer .box-container .box a {
         color: var(--light-white);
         font-size: 1.5rem;
         padding-bottom: 1.5rem;
         display: block;
         text-decoration: none;
      }

      .footer .box-container .box a i {
         color: var(--main-color);
         padding-right: .5rem;
         transition: .3s linear;
         text-decoration: none;
      }

      .footer .box-container .box a:hover i {
         padding-right: 2rem;
      }

      .footer .credit {
         text-align: center;
         padding-top: 3rem;
         margin-top: 3rem;
         border-top: .1rem solid var(--light-white);
         font-size: 2rem;
         color: var(--white);
      }

      .footer .credit span {
         color: var(--main-color);
      }

      /*footer css end*/
      :root {
         --main-color: #8e44ad;
         --black: #222;
         --white: #fff;
         --light-black: #777;
         --light-white: #fff9;
         --dark-bg: rgba(0, 0, 0, .7);
         --light-bg: #eee;
         --border: .1rem solid var(--black);
         --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
         --text-shadow: 0 1.5rem 3rem rgba(0, 0, 0, .3);
      }
      /* .yash
      {
         height:40px;
         width:40px;
      } */

   </style>

   </head>

   <body style="background-color:skyblue">
      <!-- header section starts  -->

      <section class="header">

         <a href="home.php" class="logo" id="fashion"><img src="images/y8.jpg" width="40px" height="40px"> YM Fashion  </a>
         <input type="text" placeholder="Search here..." name="name">
      
      <button type="submit"><i class="fa fa-search"></i></button>
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

      <div class="div1">
         <section>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="images/img-9.jpg" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                        <!-- <h5 class="content1">Explore, Discover, Travel</h5>
                        <p class="p1"><b>TRAVEL ARROUND</b></p>
                        <p class="p2"><b>THE WORLD</b></p> -->
                        <a href="about.php" class="button2">See More </a>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="images/m6.jpg" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                       
                        <a href="about.php" class="button2">See More </a>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="images/k4.jpg" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                       
                        <a href="about.php" class="button2">See More </a> -->
                     </div>
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
            </div>

         </section>

      </div> <br><br><br><br>
      <br><br><br><br><br><br>


      <!-- section 1 ends -->

      <!-- header end -->

      <!-- services section starts  -->

      <section class="services">

         <h1 class="heading-title"> Trading</h1><br><br><br><br><br><br><br><br>

         <div class="box-container">

            <div class="boxx">
               <a href="adventure.php"><img src="images/l3.jpg" alt=""></a>
               <h3>Morden </h3>
            </div>

            <div class="boxx">
               <img src="images/l5.jpg" alt="">
               <h3> Punjabi Style</h3>
            </div>

            <div class="boxx">
               <a href="trekking.php"><img src="images/m6.jpg" alt=""></a>
               <h3> Men Wear</h3>
            </div>

            <div class="boxx">
               <a href="camfire.php"><img src="images/k4.jpg" alt=""></a>
               <h3>Kids Wear</h3>
            </div>


            <div class="boxx">
               <a href="camping.php"><img src="images/k5.webp" alt=""></a><br>
               <h3>Kids Style</h3>
            </div>

         </div>

      </section><br><br>

      <!-- services section ends -->

      <!--  about start  -->

      <section class="home-about">

         <div class="image">
            <img src="images/m.jpg" alt="">
         </div>

         <div class="content">
            <h3>about us</h3>
            <h2> <p> ⁘ Our Website provides you products in best price.</p>
            <p> ⁘  Discount and with best quality.</p>
      <p> ⁘ We have many branches of YM Fashion in many areas.</p>
      <p>⁘ As you can see we have reached at top 5 reviews.</p>
      <p>⁘ We are since 2000</p>
      <p>🙏 We are thanking you to visit our website. 🙏 </p></h2>
            <a href="about.php" class="btn">read more</a>
         </div>

      </section>

      <!--  about  ends -->
      <!-- packages  starts  -->

      <section class="home-packages">

         <h1 class="heading-title"> Our Items </h1>

         <div class="box-container">

            <div class="box">
               <div class="image">
                  <img src="images/l4.webp" alt="">
               </div>
               <div class="contentt">
                  <h3 class="hh">Ladies Wear</h3>
               
                  <a href="cart.php" class="btn">shop now</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/m5.jpg" alt="">
               </div>
               <div class="contentt">
                  <h3>Men Wear</h3>
               
                  <a href="cart.php" class="btn">shop now</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/k4.jpg" alt="">
               </div>
               <div class="contentt">
                  <h3 class="hh">Kids Wear</h3>
                  
                  <a href="cart.php" class="btn">shop now</a>
               </div>
            </div>

         </div>

         <div class="load-more"> <a href="cart.php" class="btn">load more</a> </div><br><br>

      </section>

      <!--  packages ends -->

      <!--  offer  starts  -->

      <br><br><br>
      <section class="home-offer">
         <div class="content">
            <h3>upto 50% off</h3>
            <p>🎆🎇🎆🎇  Diwali Special Offer 🎇🎆🎇🎆</p>
            <a href="book.php" class="btn">shop now</a>
         </div>
      </section><br><br><br>

      <!--  offer  ends -->





      <!-- footer starts -->
      <section class="footer">
         <div class="box-container">
            <div class="box">
               <h3>quick links</h3>
               <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
               <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
               <a href="cart.php"> <i class="fas fa-angle-right"></i> 🛒</a>
               <a href="book.php"> <i class="fas fa-angle-right"></i> shop </a>
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

         <div class="credit"> created by <span>Yash ,Mita and Nayan </span> | all rights reserved! </div>

      </section>


      </div>
      </section>
      <!-- footer ends -->
   </body>

</html>