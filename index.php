<?php 
if (isset($_POST['username'])) 
{
  session_start();
  $_SESSION['name']=$_POST['username'];
 
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1" >
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <link rel="stylesheet" href="assets/css/style4.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	
<h2><?php 
      /* Error Notification */
      if(!empty($_GET['error']) && $_GET['error'] == 1){
        echo 'Wrong username & password!';
      }


      if(!empty($_GET['error']) && $_GET['error'] == 2){
        echo 'Please login to continue!';
      }
      if (@$_GET['success']==1) {
        echo 'Profile created successfully';}
      ?></h2>

  <div class="container">
    
<form action="checklogin.php" method="POST">
  
  <div class="container-fluid">
    <div class="form-group row">
      <div class="col-sm-9">
    <label for="username"><h4>Username</h4></label>
    <input type="text"  placeholder="Enter Username" name="username" required>

    <label for="password"><h4>Password</h4></label>
    <input type="password" placeholder="Enter Password" name="password" required>
<br>
<br>
    <button type="submit">Login</button>
    
   <h2 style="text-align: center"> or </h2>
 

  <div>
   <a href="signup.php?" class="btn btn-danger btn-lg">Sign Up</a>
     </div>
  </div>
</div>
</div>
</form>
</div>

</body>
</html>