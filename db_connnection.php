<?php
	 $dbhost = "localhost";
	 $dbuser = "root";
	 $dbpass = "";
	 $db = "myblog";

	 $conn =mysqli_connect($dbhost, $dbuser, $dbpass, $db) ;
	 if(!$conn){
	 	die("Connect failed");
	 } 
?>