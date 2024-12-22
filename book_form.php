<?php 
$conn = mysqli_connect("localhost","root","","book_form22");


if(isset($_POST["send"]))
{
    $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
     $view = $_POST['view'];

   $query="INSERT INTO book_form22(id,name, email, phone, address,view) VALUES('','$name','$email','$phone','$address','$view') ";
   echo '<script>alert("Thank You..! Your Order is confirmed."); location.replace(document.referrer);</script>';
      $run=mysqli_query($conn,$query);
}
?>