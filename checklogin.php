<?php 

$databaseHost = 'localhost';
$databaseName = 'user';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	$result = mysqli_query($mysqli, "SELECT * FROM details WHERE username = '$username' AND password = '$password' "); 

	$count = mysqli_num_rows($result); 
	
	
	if($count!=0){ 

		$data = mysqli_fetch_array($result);
		@session_start();
		$_SESSION = $data;
		
		header('location:home.php');
		
	}else{ 
		header('location:index.php?error=1');
	}
 ?>