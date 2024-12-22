<html>
    <head>
        

<title>YM Fashion</title>
   <link rel="icon" href="images/y8.jpg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="csss/style.css">
   <link href="stylee.css" rel="stylesheet" type="text/css" />
   
 <style>
    body {
    
      background-image: url(images/a.jpg); 
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;
}
.yash
{
   color:green;
   font-size:50px;
   text-shadow:4px 4px lime;
   
}

h1{
		transition: 0.10s ease;
	}
	h1:hover{
		transform: scale(1.04);
	}

	h2
	{
		color: blue;
		text-shadow: 1px 2px skyblue;
		font-size: 50px;
	}
   </style> 
</head>
<body>
   
<?php
$con = mysqli_connect("localhost", "root", "", "feed1");
if(isset($message))
{
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'headerr.php'; ?>

<div class="container">



<section class="display-product-table">
		<center><h2> Feedback Details</h2></center>
   <table>

      <thead>
      <th>name</th>
         <th>email</th>
         <th>Phone No.</th>
         <th>Feedback</th>
         <th>suggestions</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($con, "SELECT * FROM `feed1`");
            if(mysqli_num_rows($select_products) > 0)
            {
               while($row = mysqli_fetch_assoc($select_products))
               {
         ?>

         <tr style="background: white;">
            <td><?php echo $row['name']; ?></td> 
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['feedback']; ?></td>
            <td><?php echo $row['suggestions']; ?></td>
        
         </tr>

         <?php
            };    
            }
            else
            {
               echo "<div class='empty'>Empty Feedback</div>";
            };
         ?>
      </tbody>
   </table>

</section>


   

</section>

</div>

<script src="js/script.js"></script>
<center><td><a href="feedback222.php" class="yash"> <h1>BACK</h1></a></td></center>

</body>
</html>