<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1" >
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <link rel="stylesheet" href="assets/css/style4.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
include('connect.php') 
	?>
	<h3>  <?php 
   if (@$_GET['success']==1) {
echo 'Data inserted successfully';
 } elseif (@$_GET['success']==2) {
echo 'Data updated successfully';
 } elseif (@$_GET['success']==3) {
echo 'Data deleted successfully';
}
  ?></h3>
<div class="container">
	<div class="jumbotron">

		<h1>Welcome To Homepage <?php session_start();
		echo $_SESSION['name'] ?></h1>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="profile2.php">PROFILE</a></li>
					<li ><a href="logout.php">LOGOUT</a></li>
				
			</div>
		</nav>
	</div>
</div>
<h1 style="margin:0 120px">About Us</h1>
<br>
<br>
<h4 style="margin:0 160px">Details about webholder goes here...</h4>

<?php 

        if(!isset($_SESSION['name']))
        {
                header("location: index.php?error=2");
        }
 ?>
  
</body>
</html>
