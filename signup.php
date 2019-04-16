<html>
<head>
<title>Sign Up Form</title>
<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div class="login-box">
		<h1>
			<u>
				Sign up
			</u>
		</h1>
		<form action="sign_process.php" method="POST">
			<p>First Name: </p>
			<input type="text" name="namef" placeholder="Enter your First part of name" id="namef">
			<p>Last Name: </p>
			<input type="text" name="namel" placeholder="Enter your Last part of name" id="namel">
			<p>Username: </p>
			<input type="text" name="user" placeholder="Enter a Username" id="user">
			<p>Email: </p>
			<input type="email" name="mail" placeholder="Enter a Valid Email" id="mail">
			<p>Password: </p>
			<input type="password" name="pass" placeholder="Enter a Password" id="pass"><br>
			<input type="submit" name="signup" value="submit" id="submit">
		</form>
		<br><br>
		<a href="login.php">Alrady Have a Account</a><br>
		
	</div>

</body>



</html>