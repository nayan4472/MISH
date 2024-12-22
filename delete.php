<?php  

if(isset($_GET['id'])){
   include "../db_conn.php";
    

	$id = $_GET['id'];

	$sql = "DELETE FROM book_form
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../read.php?success=successfully deleted");
   }else {
      header("Location: ../read.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../read.php");
}