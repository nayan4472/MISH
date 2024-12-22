<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>YM Fashion</title>
   <link rel="icon" href="images/y8.jpg">

  
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="style.css">

   <style type="text/css">
       .heading{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 10rem;
   padding-bottom:15rem;
   display: flex;
   align-items: center;
   justify-content: center;
   border-bottom: 2px solid black;
}
.heading h1{
   font-size: 10rem;
   text-transform: uppercase;
   color:var(--white);
   text-shadow: var(--text-shadow);
} 


.booking .book-form{
   padding:2rem;
   background: var(--light-bg);
   padding: 10rem;
}

.booking .book-form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:2rem;

}

.booking .book-form .flex .inputBox{
   flex:1 1 51rem;
}

.booking .book-form .flex .inputBox input{
   width: 100%;
   padding:1.2rem 1.4rem;
   font-size: 1.6rem;
   color:var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border:var(--border);
}

.booking .book-form .flex .inputBox input:focus{
   background: var(--black);
   color:var(--white);
}

.booking .book-form .flex .inputBox input:focus::placeholder{
   color:var(--light-white);
}

.booking .book-form .flex .inputBox span{
   font-size: 1.5rem;
   color:var(--light-black);
}

.booking .book-form .btn{
   margin-top: 2rem;
}
h1
{
   font-size:20px;
}
.header{
   border-bottom: 2px solid black;
}
.login-btn{
            display: block;
            width: 150px;
            padding: 15px 20px;
            margin:30px;
            text-align: center;
            border: none;
            background: #a29bfe;
            outline: none;
            border-radius: 30px;
            font-size: 1.2rem;
            color: #FFF;
            cursor: pointer;
            transition: .3s;
        }

        .login-btn:hover {
            transform: translateY(-5px);
            background: #6c5ce7;
        }
        .c{
         position: center;
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

   <h1><a href="home.php" class="logo"><img src="images/y8.jpg" width="40px" height="40px">&nbsp;YM Fashion </a></h1>

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

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Shop Now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title"><center>🛒🛒 Buy your Wear..!  🛒🛒</center></h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="enter your name" name="name" >
         </div>
         <div class="inputBox">
            <span>E-mail :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <p>
         <div>
         <h2><b>Payment Mode :</b></h2>
			 <ul class="agile_info_select">
				 <input type="radio" name="view" value="cash" id="cash" required> 
				 	  <label for="excellent">Cash</label>
				      <div class="check w3"></div>
				 </li>
            
				 <input type="radio" name="view" value="GooglePay" id="GooglePay"> 
					  <label for="GooglePay"> Googlepay</label>
				      <div class="check w3ls"></div>
				 </li>
				 <input type="radio" name="view" value="Paytm" id="Paytm">
					 <label for="Paytm">Paytm</label>
				     <div class="check wthree"></div>
				 </li>
				 <input type="radio" name="view" value="Phonepay" id="Phonepay"> 
					  <label for="Phonepay">Phonepay</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>
</div>	
      </div>
        <div class="c">
     <center> <input type="submit" value="submit" class="login-btn" name="send"></center>
      </div>

      <div class="r">
     <center> <input type="reset" value="reset" class="login-btn" ></center>
      </div>

      <div class="c">
     <center> <a href="ocancel.php"><input type="button" value="Cancel Order " class="login-btn" name=""></a></center>
      </div>
   </form>

</section>

<!-- booking section ends -->

<!-- footer section starts  -->

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

   <center>
            <marquee width="300px" direction="left" height="200px">
         <div class="credit"> created by <span>Yash , Mita & Nayan </div>
         </marquee>
         </center>
</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>