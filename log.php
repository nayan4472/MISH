<!-- <?php

                include('config.php');

                if (isset($_POST['submit'])) {

                    $email =  $_POST['email'];
                    $password =  $_POST['password'];

                    $query = "select id,role from users where email='$email' AND password='$password';";

                    $role = "select id,role from users where email='$email';";
                    if (mysqli_query($conn, $query)) {

                        $rolee = mysqli_query($conn, $role);
                        $res_role = mysqli_fetch_array($rolee);
                        $idd =  $res_role['id'];

                        if ($query && $res_role['role'] == '0') {
                            echo '<script>window.location.href = "welcome.php?id=' . $idd . '"</script>';
                        } else if ($query && $res_role['role'] == '1') {
                            echo '<script>window.location = "ahome.php"</script>';
                        } else {
                            echo "<br><br><span style='color:red;font-size:0.9rem;'>Wrong email or password</span>";
                            // echo "<script>document.getElementById('email').style='border:1px solid red;'</script>";
                            // echo "<script>document.getElementById('password').style='border:1px solid red;'</script>";
                        }
                    }
                }

                ?> -->

<!DOCTYPE html
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="Untitled-1.css">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


	<title>Login Form</title>
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
            background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(images/bg.jpg);
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
            color: #111;
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



	</style>

</head>
<body>
    <center>
	<div class="login">
    
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 3rem; font-weight: 800;">Login</p>
			<div class="login-input">
				<input type="email" placeholder="Email" name="email"  required>
			</div>
			<div class="login-input">
				<input type="password" placeholder="Password" name="password"  required>
			</div>
            <div class="forgot-btn">
                <p class="login-register-text"><a href="recover.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Forgot Password?</a></p><br>
            </div>
			<div class="login-input">
				<button name="submit" class="login-btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
		</form>
	</div>
    </center>
    
   
</body>
</html>