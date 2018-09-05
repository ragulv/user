<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
include('connect.php');
 ?>

	<div class="container">
		
		<div class="table-responsive">
			<table class="table table-responsive table-hover">
			<thead>
				<tr>
				    <th>Sl no</th>
  					<th>Name</th>
          	<th>Company</th>
          	<th>Address1</th>
  					<th>Address2</th>
  					<th>City</th>
  					<th>State</th>
  					<th>Pin code</th>
  					<th>Phone no</th>
          	<th>Email</th>
  					<th>Action</th>
  			
				</tr>
				<tbody>
  		<?php 
  	
  		$result=mysqli_query($mysqli,"SELECT * FROM details");
  		$i=1;
  		while ($res= mysqli_fetch_array($result)) {
  			echo '<tr>
           <td>'.$i++.'</td>
           <td>'.$res['name'].'</td>
           <td>'.$res['company'].'</td>
           <td>'.$res['address1'].'</td>
           <td>'.$res['address2'].'</td>
           <td>'.$res['city'].'</td>
           <td>'.$res['state'].'</td>
           <td>'.$res['pin_code'].'</td>  			
           <td>'.$res['phone_no'].'</td> 
           <td>'.$res['email'].'</td> 		
       		<td>
      		 <a href="edit.php?user_id='.base64_encode($res ['user_id']).'" class="btn btn-info btn-sm">Edit</a>
      		 <a href=delete.php?user_id='.base64_encode($res['user_id']).'" class="btn btn-info btn-sm">Delete</a>
	
	
       		</td>
       		</tr>';
       }

  		 ?></tbody>
			</thead>	
			</table>
		</div>
		<div align="center">
		<div class="btn btn-lg btn-link" > <a href="home.php">Home</a></div>

		
	</div>
<script>function myFunction() {alert("Are you sure want to delete );}</script>
</ul>
</div>
</nav>
</div>
</div>
</body>
</html>