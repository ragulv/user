<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1" >
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
include('connect.php') 
	?>
<div class="container">
	<div class="jumbotron">
		<h1>Your Profile</h1>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="home.php">HOME</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
					<li><a href="edit.php">EDIT PROFILE</a></li>
				</ul>
			</div>
		</nav>
	</div>
</div>

    <h2 style="margin:0 120px"> <?php
        session_start();
        if(!isset($_SESSION['name']))
        {
                header("location: index.php?error=2");
        }

?> 
		Serial no: <?php echo $_SESSION['serial_no']; ?><br>
		Your Name: <?php echo $_SESSION['name']; ?><br>
		Company: <?php echo $_SESSION['company']; ?><br>
		Address1: <?php echo $_SESSION['address1']; ?><br>
		Address2: <?php echo $_SESSION['address2']; ?><br>
		City: <?php echo $_SESSION['city']; ?><br>
		State: <?php echo $_SESSION['state']; ?><br>
		Pin_code: <?php echo $_SESSION['pin_code']; ?><br>
		Phone_no: <?php echo $_SESSION['phone_no']; ?><br>
		Interest: <?php echo $_SESSION['interest']; ?><br>
		Email: <?php echo $_SESSION['email']; ?>
		

</body>
</html>