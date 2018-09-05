<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1" >
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
include('connect.php') 
	?>
<div class="container">
<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" />

<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />

<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>