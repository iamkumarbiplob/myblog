<?php
	require_once"db_connnection.php";

	$username=$_POST['username'];
	$password=$_POST['password'];


	if ($username=="" || $password=="") {
		# code...
		echo "Invalid Username or Password";
		header("Location: login.php");
		//include_once 'login.php';
		
	}
	else{

		$sql="select *from authors where username = '$username' and password = '$password'";
		$result = mysqli_query($conn,$sql);

		while($row=mysqli_fetch_assoc($result)){

			if ($row['username']==$username && $row['password']==$password) {
				$id=$row["id"];
				$email=$row["email"];
				$fname=$row["fname"];
				session_start();
				$_SESSION['id']=$id;
				$_SESSION['email']=$email;
				$_SESSION['fname']=$fname;
				header("Location: home.php");
			#	include_once 'home.php';
			}
			elseif ($row['username']!=$username || $row['password']!=$password) {
				# code...
				echo "Enter Username Correctly....";
				header("Location: login.php");
#				include_once 'login.php';
			}


		}
	}

?>