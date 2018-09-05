<?php 
include('connect.php');
     $user_id = base64_decode($_GET['user_id']);
    $result=mysqli_query($mysqli,"DELETE FROM `details` WHERE user_id= '$user_id'");
    if ($result){
    	echo '<script>window.open("home.php? success=3","_SELF")</script>';
    } else{
    	echo mysql_error();
    }
 ?>