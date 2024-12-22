
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<style>
		div 
		{
			border:1px solid red;
			background-color:white;
			height:500px;
			width:500px;
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

		.login-btn{
            display: block;
            width: 150px;
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
		.login-input {
            width: 150px;
            height: 50px;
            margin-bottom: 25px;
		}
		
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
		input{
            width: 300px;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 30px;
            background: transparent;
            outline: none;
            transition: .3s;
        }  
		.login-register-text {
            color: #111;
            font-weight: 600;
        }
        .login-register-text a {
            text-decoration: none;
            color: #6c5ce7;
        }
		</style>
</head>
<body>
	<center>
	<div>
    <form action="change-p.php" method="post">
	<p class="login-text" style="font-size: 3rem; font-weight: 800;">Change Password</p>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password">
     	       <p>

     	
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password">
     	       <p>

     	
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">
		
     	       <p>

     	<button type="submit" class="login-btn">CHANGE</button><p>
         <p class="login-register-text"><a href="welcome.php" class="ca">WELCOME</a><p>
     </form>
		</div>
		</center>
</body>
</html>

