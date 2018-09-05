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
<?php 
      /* Error Notification */
      if(!empty($_GET['error']) && $_GET['error'] == 1){
        echo 'Wrong username & password!';
      }


      if(!empty($_GET['error']) && $_GET['error'] == 2){
        echo 'Please login to continue!';
      }

      ?>

	<div class="container">
		
<form action="Login.php" method="POST">
  
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    or
  </div>

  <div>
    <button type="button" class="cancelbtn"><a href="signup.php?">Sign Up</button>
    
  </div>
</form>
</div>

</body>
</html>