<?php
	include_once"db_connnection.php";

	session_start();
	$title=$_POST['title'];
	$text=$_POST['text'];
	$id=$_SESSION['id'];


	$sql="INSERT INTO posts(title, text , author_id) VALUES ('$title','$text','$id')";

	
	mysqli_query($conn,$sql);
	header("Location: home.php");

?>