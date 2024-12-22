<?php 

session_start();

if (isset($_SESSION['username'])) {
     header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
     <style type="text/css">
      *{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
   background: url(images/);
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}
/*header css starts*/
.header{
   position: sticky;
   top:0; left:0; right:0;
   z-index: 1000;
   background-color: white;
   display: flex;
   padding-top: 2rem;
   padding-bottom: 2rem;
   box-shadow:;
   align-items: center;
   justify-content: space-between;
   padding-right: 20rem;
   padding-left: 10rem;
   border-bottom:2px solid black;
}

.header .logo{
   font-size: 2.5rem;
   color:black;
   
}

.header .navbar a{
   font-size: 2rem;
   margin-left: 2rem;
   color:black;
   text-align:center;
}

.header .navbar a:hover{
   color:purple;
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
   color: white;
   text-shadow: text-shadow;
}
    /*header css ends*/
      .buttons{
            margin-top: 5%;
            margin-right: 5%;
            display: flex;
            justify-content: center;
        }

        .btn {
            height: 45px;
            margin-left: 10rem;
            color: white;
            font-size: 17px;
            text-align: center;
            padding-top: 10px;
            width: 10%;
            border: none;
            background-color: lightpink;
            border-radius: 10px;
            transition-duration: 200ms;

        }

        :hover.btn {
            background-color: purple;
            transition-duration: 200ms;
        }
</style>
</head>
<body>
    <!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/y8.jpg" width="40px" height="40px"> YM Fashion</a>

   <!-- <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="gallery.php">gallery</a>
      <a href="feedback.php">contact us</a>
   </nav> -->


</section>

<!-- section 1 starts -->
<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
    <?php echo "<h1>Welcome </h1>"; ?>
</div>
<div class="buttons">
    <a href="logout.php" class="btn">Logout</a>
    <a href="change-password.php" class="btn">Change Password</a>
    <a href="home.php" class="btn">HOME-PAGE</a>
</div>
</body>
</html>