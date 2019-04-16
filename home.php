<?php
	include 'db_connnection.php';

	$sql="SELECT * FROM posts ORDER BY id DESC";
	$sql2="SELECT * FROM posts ORDER BY id DESC";
	


	$result = mysqli_query($conn,$sql);
	$latest = mysqli_query($conn,$sql2);

	//Start session here 
	
	session_start();
	$fname =$_SESSION['fname'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Wellcome to MyBlog</title>
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
						<a href="#">Home</a>
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
									<!------Left Sidebar Start------>
			<div class="leftsidebar ">
				<p>


					<?php
						
					//start left sidebar here or post tag
						while ($post = mysqli_fetch_assoc($result)) {
                			echo '<div class="post">';
                			echo '<h3><a href="post.php?id='.$post['id'].'">'.$post['title'] . '</a></h3>';
                			echo '<p>'.substr($post['text'], 0, 250).' ... <a href="post.php?id='.$post['id'] .'">read more...</a></p>.';
                			echo '<br>';
                			echo '</div>';
                		}

					?>
				</p>
			</div>
									<!------Left Sidebar Finish------>

									<!------Right Sidebar Start------>
			<div class="rightsidebar ">

				<?php
				//start sidepanel here
				while ($post = mysqli_fetch_assoc($latest)){
					echo '<div class="side">';
					echo '<h3><a href="post.php?id='.$post['id'].'">'.$post['title'] . '</a></h3>';
	    			echo '</div>';
				}


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