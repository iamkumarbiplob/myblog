<?php

	$pid = $_REQUEST['id'];

	function getPost($id) {
		include 'db_connnection.php';

	    //select posts
	    $sql = "SELECT * FROM posts WHERE id=$id";
	    //prepare statement
	 
		$result = mysqli_query($conn,$sql);
				
			//start left sidebar here or post tag
			while ($post = mysqli_fetch_assoc($result)) {
				echo '<div class="post">';
				echo '<h3>'.$post['title'] . '</h3><br>';
				echo '<p>'.$post['text'] . '</p>';
				echo '</div>';
			}



	}

	session_start();
	$fname =$_SESSION['fname'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Post</title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
									<!------Header Start------>
		<div class="header template">
			<div class="headin template">
				<ul>
					<li>
						<a href="#">myblog</a>
					</li>
					<li>
						<a href="home.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="add.php">Add Post</a>
					</li>
				</ul>
			</div>
			<div style="clear: both;"></div>
			<div class="log">
				<ul>
					<li>
						<a href="logout.php"><?php echo $fname.", " ?>Logout</a>
					</li>
				</ul>
				
			</div>
		</div>
									<!------Header Finish------>
		<div style="clear: both;"></div>

		<div class="main template">
			<div class="leftsidebar ">
				<h2>Post Details</h2>
				<?php
		            getPost($pid);
		        ?>	

			</div>
			
									<!------Right Sidebar Finish------>

		</div>
		<div style="clear: both;"></div>
									<!------Footer Start------>
		<div class="footer template">
			<p>
				copyright &copy <?php echo date('Y'); ?>  Biplob Kumar & Alipto Goswami.	
			</p>
				
		</div>
									<!------Footer Finish------>
	</body>
</html>