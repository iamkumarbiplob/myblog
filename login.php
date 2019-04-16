<!DOCTYPE html>
<html>
<head>
	<title>
		Login Here
	</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
									<!------Login Start------>
	<div class="login-box">
		<img src="img/avatar.png" class="avatar">
		<h1>Login Here</h1>
		<form action="logprocess.php" method="POST">
			<p>Username:</p>
			<input type="text" name="username" placeholder="Enter Username" id="username">
			<p>Password:</p>
			<input type="password" name="password" placeholder="Enter Password" id="password">
			<input type="submit" name="submit"value="Login" id="submit">
		</form>

		<a href="signup.php">Need a Account?</a><br>

	</div>

									<!------Login Finish------>
	<div class="footer template">
		<p>
			copyright &copy <?php echo date('Y'); ?>  Biplob Kumar & Alipto Goswami.	
		</p>
				
	</div>
	
</body>
</html>