<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1" >
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <link rel="stylesheet" href="assets/css/style4.css">
  <!-- <script src="assets/js/jquery.min.js"></script> -->
  <!-- <script src="assets/js/bootstrap.min.js"></script> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" type="text/css"/>
  
  <script type="text/javascript">
    $(document).ready(function() {
        $('#multiselect').multiselect({
            buttonWidth: '400px'
        });
    });
</script>

<style type="text/css">
    .multiselect-container {
        width: 100% !important;
    }
</style>

</head>
<body>
	<?php 
	session_start();
	if(!isset($_SESSION['name']))
        {
                header("location: index.php?error=2");
        }

include('connect.php') ;
	if (!empty($_SESSION['user_id']));
	// $user_id=base64_decode($_GET['user_id']);
	$user_id=$_SESSION['user_id'];
	$result=mysqli_query($mysqli,"SELECT * FROM details WHERE user_id='$user_id'");
	$data=mysqli_fetch_array($result);
	?>
<div class="container">
<h4>
<form role="form" method="post" action="update.php">
	<input type="hidden"  value="<?php echo $data['user_id']; ?>" name="user_id">
		<div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputName" name="name" placeholder="Name" autocomplete="on" value="<?php echo $data['name'] ;?>" >
			</div>
			

			<div>
			<label for="inputCompany" class="col-sm-2 col-form-label">Company</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputCompany" name="company" placeholder="Company" autocomplete="on" value="<?php echo $data['company'] ;?>" >
			</div>
			</div>
			<div>
			<label for="inputAddress1" class="col-sm-2 col-form-label">Address1</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputAddress1" name="address1" placeholder="Address1" autocomplete="on" value="<?php echo $data['address1'] ;?>" >
			</div>
			</div>

			<div>
			<label for="inputAddress2" class="col-sm-2 col-form-label">Address2</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Address2" autocomplete="on" value="<?php echo $data['address2'] ;?>" >
			</div>
			</div>
			
			<div>
			<label for="inputCity" class="col-sm-2 col-form-label">City</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputCity" name="city" placeholder="City" autocomplete="on"  value="<?php echo $data['city'] ;?>" >
			</div>
			</div>
			<div>
			<label for="inputState" class="col-sm-2 col-form-label">State</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputState" name="state" placeholder="State" autocomplete="on"  value="<?php echo $data['state'] ;?>" >
			</div>
			</div>
			<div>
			<label for="inputPin_code" class="col-sm-2 col-form-label">Pin code</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputPin_code" name="pin_code" placeholder="Pin_code" autocomplete="on"  value="<?php echo $data['pin_code'] ;?>" >
			</div>
			</div>
			<div>
			<label for="inputPhone_no" class="col-sm-2 col-form-label">Phone no</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputPhone_no" name="phone_no" placeholder="Phone_no" autocomplete="on" value="<?php echo $data['phone_no'] ;?>" >
			</div>
			</div>

			<div > 
				<label for="multiselect" class="col-sm-2 col-form-label">Interest</label>
				<div class="col-sm-9">
					<select class="form-control"  name="interest[]" id="multiselect" multiple="multiple" value="<?php echo $data['interest[]'] ;?>">
						  <option value="jQuery">jQuery</option>
  						  <option value="Bootstrap">Bootstrap</option>
  						  <option value="HTML">HTML</option>
  						  <option value="CSS">CSS</option>
  						  <option value="angular">Angular JS</option>

					</select>
					</div>
				</div>

		<div>
			<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email" autocomplete="on" value="<?php echo $data['email'] ;?>" >
			</div>
			</div>
		<div>
			<label for="inputUser" class="col-sm-2 col-form-label">username</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputUser" name="username" placeholder="username" autocomplete="on" value="<?php echo $data['username'] ;?>" >
			</div>
		</div>		
		<div>
			<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-9">
				<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" autocomplete="on" value="<?php echo $data['password'] ;?>" >
			</div>
		</div>
	</div>
		<div>
			<div align="center">
				<input type="submit"  value="Update" name="submit" class="btn btn-success"/>
				<input type="reset"  value="Cancel" class="btn btn-success" onclick="history.back();" />
			</div>
			</div>		
	</form></h4>
	</div>
	<script type="text/javascript">
 
    $(document).ready(function() {
 
        $('interest').multiselect();
 
    });
 
</script>
</body>
</html>