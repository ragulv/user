<?php 
include ('connect.php');
if(!empty($_POST)){

	if(!empty($_POST['interest'])){
		$interest = implode(',',$_POST['interest']);
	}else{
			$interest = '';
	}
	
	$name=$_POST['name'];
	$company=$_POST['company'];
	$address1=$_POST['address1'];
	$address2=$_POST['address2'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$pin_code=$_POST['pin_code'];
	$phone_no=$_POST['phone_no'];
	// $interest=$_POST['interest'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$user_id=$_POST['user_id'];

$result=mysqli_query($mysqli,"UPDATE `details` SET `user_id`='$user_id',`name`='$name',`company`='$company',`address1`='$address1',`address2`='$address2',`state`='$state',`city`='$city',`pin_code`='$pin_code',`phone_no`='$phone_no',`interest`='$interest',`email`='$email',`username`='$username',`password`='$password' WHERE `user_id`='$user_id' ");
if ($result){
   	echo header('location:home.php?success=2');
   }else{
   	echo mysql_error();
   }


}

 ?>