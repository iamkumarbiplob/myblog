<?php
	include_once"db_connnection.php";


	$fname=$_POST['namef'];
	$lname=$_POST['namel'];
	$email=$_POST['mail'];
	$username=$_POST['user'];
	$password=$_POST['pass'];



	$sql="INSERT INTO authors (fname, lname, email, username, password) VALUES ('$fname','$lname','$email','$username','$password')";


	
	mysqli_query($conn,$sql);

	echo "Successfully Signup";
	header("Location: login.php");

?>