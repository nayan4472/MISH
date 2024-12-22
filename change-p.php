<?php 
session_start();

if (isset($_SESSION['username'])) {

    include "config.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

    
    $op = $_POST['op'];
    $np = $_POST['np'];
    $c_np = $_POST['c_np'];
    
    if(empty($op)){
      header("Location: change-password.php?error=Old Password is required");
      exit();
    }else if(empty($np)){
      header("Location: change-password.php?error=New Password is required");
      exit();
    }else if($np !== $c_np){
      header("Location: change-password.php?error=The confirmation password  does not match");
      exit();
    }else {
        // hashing the password
        $op = md5($op);
        $np = md5($np);
        $username = $_SESSION['username'];

        $sql = "SELECT password
                FROM users WHERE 
                username='$username' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            
            $sql_2 = "UPDATE users
                      SET password='$np'
                      WHERE username='$username'";
            mysqli_query($conn, $sql_2);
            header("Location: change-password.php?success=Your password has been changed successfully");
            exit();

        }else {
            header("Location: change-password.php?error=Incorrect password");
            exit();
        }

    }

    
}else{
    header("Location: change-password.php");
    exit();
}

}else{
     header("Location: index.php");
     exit();
}

?>