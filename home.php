<?php
if (isset($_POST['apple'])){
  	header('Location:pages/page2.php.php');
}

if (isset($_POST['samsung'])){
  	header('Location:pages/page3.phpl');
  }

	if (isset($_POST['huawei'])){
	  	header('Location:pages/page4.php');
	  }

 ?>


<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
	<link rel="stylesheet" href="home1.css">
</head>
  <body>
	    <header>
		     <div class="appname">HOME</div>
		     <div class="loggedin">Welcome <?php echo $_SESSION['username']; ?>! <a href="logout.php">Log Out</a></div>
   	</header>
		  <div class="banner">


			<div class="content">
				<h1>Welcome to myMobile.lk</h1>
				<h2>Select Your Brand</h2>

							<div>
							<form class="form1" action="pages/page2.php" method="post">
								<button type="apple" value="apple"><span></span>APPLE</button>
							</form>
						</div>

							<div>
							<form class="form2" action="pages/page3.php" method="post">
								<button type="samsung" value="samsung"><span></span>SAMSUNG</button>
							</form>
						</div>

							<div>
							<form class="form3" action="pages/page4.php" method="post">
								<button type="huawei" value="huawei"><span></span>HUAWEI</button>
							</form>
						</div>

			</div>
		</div>
   </body>
</html>
