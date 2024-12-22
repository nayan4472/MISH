<!DOCTYPE html>
<html>
<head>
<title>YM Fashion</title>
   <link rel="icon" href="images/y8.jpg">
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style type="text/css">
	*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

   .header {
   
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
      border-bottom: 2px solid black;

      }

      .header .logo {
         font-size: 2rem;
         color: black;
      }


      .header .navbar a {
         font-size: 1.5rem;
         margin-left: 1rem;
         color: black;
         text-decoration: none;
      }

      .header .navbar a:hover {
         color: purple;
      }

      #travel {
         text-decoration: none;
      }
      .divnavbar{
      	margin-right: 140px;
      }
     
</style>
</head>
<body class="agileits_w3layouts">
	<!-- header section starts  -->

 <section class="header" id="n">

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
         </nav>

</section>


    <h1 class="agile_head text-center">Feedback Form</h1>
    <div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form action="feed.php" method="post" class="agile_form">
		  <h2>How satisfied were you with our Service?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
				 	  <label for="excellent">Excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="good" id="good"> 
					  <label for="good"> Good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="neutral" id="neutral">
					 <label for="neutral">Neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="poor" id="poor"> 
					  <label for="poor">Poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<input type="text" placeholder="Your Name (optional)" name="name"  />
			<input type="email" placeholder="Your Email (optional)" name="email"/>
			<input type="text" placeholder="Your Number (optional)" name="num"  /><br>
			<center><input type="submit" value="submit Feedback  " class="yash" /></center>
	  </form>
	</div>
	<div class="agileits_copyright text-center">
			<p> <a href="home.php"><img src="images/y8.jpg" width="40px" height="40px"></a>&nbsp;<t>

         <center>
            <marquee width="100px" direction="left" height="200px">
         <div class="credit"> Yash @ 2022 </div>
         </marquee>
         </center>
         </p>
	</div>
</body>
</html>

