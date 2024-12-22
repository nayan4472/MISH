<?php

                include('config.php');

                if (isset($_POST['submit'])) 
                {

                    $email =  $_POST['email'];
                    $password =  $_POST['password'];

                    $query = "select id,role from users23 where email='$email' AND password='$password'";

                    $role = "select id,role from users23 where email='$email'";
                    if (mysqli_query($conn, $query)) {

                        $rolee = mysqli_query($conn, $role);
                        $res_role = mysqli_fetch_array($rolee);
                        $idd =  $res_role['id'];

                        if ($query && $res_role['role'] == '0')
                         {
                            echo '<script>window.location.href = "welcome.php?id=' . $idd . '"</script>';
                        }
                         else if ($query && $res_role['role'] == '1') 
                        {
                            echo '<script>window.location = "admin.php"</script>';
                        }
                         else
                         {
                            echo "<br><br><span style='color:red;font-size:0.9rem;'>Wrong email or password</span>";
                        }

                        
                            if($query && $res_role['role'] == '1')
                            {
                               echo '<script>alert("Login Successfully")</script>';
                            }
                            else
                            {
                                echo '<script>alert("Login Unsuccessfully")</script>';
                            }
                        
                    }
                }

                ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>YM Fashion</title>
   <link rel="icon" href="images/y8.jpg">
	<style>
		

        * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
               font-family: 'Poppins', sans-serif;
        }
           body {
            width: 100%;
             min-height: 100vh;
        
            background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(images/p-2.jpg);
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
            .login {
            width: 400px;
            min-height: 400px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            padding: 40px 30px;
        }

        .login-text{
            color: skyblue;
            text-shadow:2px 5px blue;
            font-weight: 500;
            font-size: 1.1rem;
            text-align: center;
            margin-bottom: 20px;
            display: block;
            text-transform: capitalize;
        }
        .login-input {
            width: 100%;
            height: 50px;
            margin-bottom: 25px;
        }
        input{
            width: 100%;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 30px;
            background: transparent;
            outline: none;
            transition: .3s;
        }   
        .login-btn{
            display: block;
            width: 100%;
            padding: 15px 20px;
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
        .login-register-text {
            color: #111;
            font-weight: 600;
        }
        .login-register-text a {
            text-decoration: none;
            color: #6c5ce7;
        }
        .forgot-btn{
            text-align: left;
        }
        .forgot-btn button {
            border: none;
            background-color: transparent;
            outline: none;
            font-weight: 450;
            cursor: pointer;
        }
      img 
      {
        width:100px;
        height:100px;
      }  


	</style>

</head>
<body>
	<div class="login">
		<form action="" method="POST" class="login-email">
       <center> <img src="images/y8.jpg" width="40px" height="40px"></center>
			<p class="login-text" style="font-size: 3rem; font-weight: 800;">Login</p>
			<div class="login-input">
				<input type="email" placeholder="Email" name="email"  required>
			</div>
			<div class="login-input">
				<input type="password" placeholder="Password" name="password"  required>
			</div>
            <div class="forgot-btn">
                <p class="login-register-text"><a href="change-password.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Forgot Password?</a></p><br>
            </div>
			<div class="login-input">
				<button name="submit" class="login-btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
		</form>
	</div>
    
   
</body>
</html>