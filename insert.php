<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<?php 
include 'connect.php';
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
	$serial_no=$_POST['serial_no'];
	$sql="INSERT INTO details(`name`,`company`,`address1`,`address2`,`state`,`city`,`pin_code`,`phone_no`,`email`,`username`,`password`,`user_id`,`serial_no`,`interest`) VALUES ('$name','$company','$address1','$address2','$state','$city','$pin_code','$phone_no','$email','$username','$password','$user_id','$serial_no','$interest')";

echo $result=mysqli_query($mysqli,$sql) or exit(mysqli_error($mysqli));

	if ($result){
	 echo	header('location:index.php? success=1');
	}else{
	echo	mysqli_error($mysqli);
	}
}
 ?>
 </body>
 </html