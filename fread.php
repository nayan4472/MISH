<?php include "fread.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center"></h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			       <th scope="col">Phone</th>
			      <th scope="col">Feedback</th>
			       <th scope="col">Suggestions</th>
			      

			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['name']?></td>
			      <td><?php echo $rows['email']; ?></td>
			      <td><?php echo $rows['phone']; ?></td>
			      <td><?php echo $rows['feedback']; ?></td>
			      <td><?php echo $rows['suggestions']; ?></td>
			     
			     
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<!-- <a href="index.php" class="link-primary">Create</a> -->
			</div>
		</div>
	</div>
		<center><td><a href="ahome.php" class="cmd"> BACK</a></td></center>
</body>
</html>