

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>


	<style type="text/css">
div
	{
		background-color: red;
		height: 400px;
		width: 300px;
		border: 2px solid blue;

	}
	h1
	{
	    color: blue;
		text-shadow: 2px 2px lime;
	}
	form
	{
		color: skyblue;
	}
	input 
	{
		border: 2px solid blue;
	}
	.sub{
		transition: 0.25s ease;
	}
	.sub:hover{
		transform: scale(1.04);
	}
	h1{
		transition: 0.25s ease;
	}
	h1:hover{
		transform: scale(1.04);
	}
	input{
		transition: 0.25s ease;
	}
	input:hover{
		transform: scale(1.04);
	}
	div{
		transition: 0.25s ease;
	}
	div:hover{
		transform: scale(1.04);
	}
</style>
</head>

<center>
	
<div>
	<h1> Marksheet</h1>
<form action="result.php" method="POST">
<body>

	<form action="result.php" method="POST">
		<table border="1">
			<tr>
				<td>
					Rollno:
				</td>
				<td>
					<input type="text" name="rollno">
				</td>
			</tr>
			<tr>
				<td>
					Name:
				</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>
					S1:
				</td>
				<td>
					<input type="text" name="s1">
				</td>
			</tr>
			<tr>
				<td>
					S2:
				</td>
				<td>
					<input type="text" name="s2">
				</td>
			</tr>
			<tr>
				<td>
					S3:
				</td>
				<td>
					<input type="text" name="s3">
				</td>
			</tr>
			<tr>
				<td>
					Total:
				</td>
				<td>
					<input type="text" name="total">
				</td>
			</tr>
			<tr>
				<td>
					Persentage:
				</td>
				<td>
					<input type="text" name="per">
				</td>
			</tr>
			<tr>
				<td>
					Grade:
				</td>
				<td>
					<input type="text" name="g">
				</td>
			</tr>
		</table>
		<p>
		<input type="submit" name="sub" class="sub" value="Submit">
		<input type="reset" name="res" class="sub" value="Reset">
</form>
</body>
</html>