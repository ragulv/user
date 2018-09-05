<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1" >
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <link rel="stylesheet" href="assets/css/style4.css">
	 <link rel="stylesheet" href="assets/css/bootsrtap-multiselect.css">


<!--   <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap1.min.js"></script>
  <script src="assets/js/bootsrtap-multiselect.js"></script>
 -->





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
include('connect.php');

$serial_no = 'STU0001';

    $result=mysqli_query($mysqli,"SELECT user_id FROM details  ORDER BY user_id DESC LIMIT 1 ");      
      $data = mysqli_fetch_array($result);


      if(!empty($data['user_id'])){ 
        $serial_no = $data['user_id']; /* Last Roll no from the table */
        $serial_no++; /* Increment the last roll no here */
        $serial_no = 'STU00'.$serial_no;


       }


	?>
<h4><div class="container"> 
	
<form  method="post" action="insert.php">

	<div class="form-group row">
      <label for="serial_no" class="col-sm-2 col-form-label">Serial no</label>
		<div class="col-sm-9">
      <input type="text" name="serial_no" id="serial_no" class="form-control" readonly value="<?php echo $serial_no; ?>">
  </div>
      
		<div>
			<label for="inputName" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputName" name="name" placeholder="Name" autocomplete="on">
			</div>
		</div>
			

			<div>
			<label for="inputCompany" class="col-sm-2 col-form-label">Company</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputCompany" name="company" placeholder="Company" autocomplete="on">
			</div>
			</div>
			<div>
			<label for="inputAddress1" class="col-sm-2 col-form-label">Address1</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputAddress1" name="address1" placeholder="Address1" autocomplete="on">
			</div>
			</div>

			<div>
			<label for="inputAddress2" class="col-sm-2 col-form-label">Address2</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Address2" autocomplete="on">
			</div>
			</div>
			<div>
			<label for="inputCity" class="col-sm-2 col-form-label">City</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputCity" name="city" placeholder="City" autocomplete="on">
			</div>
			</div>
			<div>
			<label for="inputState" class="col-sm-2 col-form-label">State</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputState" name="state" placeholder="State" autocomplete="on">
			</div>
			</div>
			
			<div>
			<label for="inputPin_code" class="col-sm-2 col-form-label">Pin code</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputPin_code" name="pin_code" placeholder="Pin code" autocomplete="on">
			</div>
			</div>
			<div>
			<label for="inputPhone_no" class="col-sm-2 col-form-label">Phone no</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputPhone_no" name="phone_no" placeholder="Phone no" autocomplete="on">
			</div>
			</div>
			<div > 
				<label for="multiselect" class="col-sm-2 col-form-label">Interest</label>
				<div class="col-sm-9">
					<select class="form-control"  name="interest[]" id="multiselect" multiple="multiple">
						  <option value="jQuery">jQuery</option>
  						  <option value="Bootstrap">Bootstrap</option>
  						  <option value="HTML">HTML</option>
  						  <option value="CSS">CSS</option>
  						  <option value="angular">Angular JS</option>

					</select>
					</div>
				</div>

		<div>
			<label for="inputEmail" class="col-sm-2 col-form-label">Email *</label>
			<div class="col-sm-9">
				<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" autocomplete="on" required>
			</div>
			</div>
		<div>
			<label for="inputUser" class="col-sm-2 col-form-label">Username *</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="inputUser" name="username" placeholder="username" autocomplete="on" required>
			</div>
		</div>		
		<div>
			<label for="inputPassword" class="col-sm-2 col-form-label">Password *</label>
			<div class="col-sm-9">
				<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" autocomplete="on" required>
			</div>
		</div>
		<div>
			<label for="psw-repeat" class="col-sm-2 col-form-label">Repeat Password *</label>
			<div class="col-sm-9">
   				 <input type="password" class="form-control" id="psw-repeat" placeholder="Repeat Password" name="psw-repeat" required>
   			</div>
   		</div>
	</div>
	
		<div align="center">
			
			<input type="submit" value="Submit" name="submit" class="btn btn-success"/>
			<input type="reset" value="Cancel" class="btn btn-success" onclick="history.back();" />
			</div>
			
	</form> 
</div>	
			<div><label class="col-sm-2 col-form-label" style="color: red">	* required field</label></div></h4>
			
			<script type="text/javascript">
 
    $(document).ready(function() {
 
        $('interest').multiselect();
 
    });
 
</script>
	</div>
</body>
</html>
