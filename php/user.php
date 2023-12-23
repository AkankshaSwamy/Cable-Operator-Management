<?php 
include 'connect.php'; 
if(isset($_POST["submit"])){
	$cust_id=$_POST[ "cust_id" ];
	$name=$_POST[ "name"];
	$address=$_POST[ "address"];
	$city=$_POST["city"]; 
	$phone=$_POST[ "phone"];
	$email_id=$_POST["email_id"];
	
	 

	$sql="INSERT INTO CUSTOMER_DETAILS(cust_id,name,address,city,phone,email_id) values('$cust_id', '$name', '$address','$city','$phone', '$email_id')";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Data inserted successfully";
		header('location:customer_details.php');
	}else{
	 die(mysqli_error($conn));
	}
}
?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<title>CUSTOMER DETAILS</title>


	</head>
	<body>
		<div class="container my-5">
			<form method="post">
				<div class="form-group">
						<label>cust_id</label>
						<input type="number" class="form-control" placeholder="Enter cust_id" autocomplete="off" name="cust_id">
						<label>name</label>
						<input type="text" class="form-control" placeholder="Enter name" autocomplete="off" name="name">
						<label>address</label>
						<input type="text" class="form-control" placeholder="Enter address" autocomplete="off" name="address">
						<label>city</label>
						<input type="text" class="form-control" placeholder="Enter city" autocomplete="off" name="city">
						<label>phone</label>
						<input type="number" class="form-control" placeholder="Enter phone number" autocomplete="off" name="phone">
						<label>email_id</label>
						<input type="email" class="form-control" placeholder="Enter email_id" autocomplete="off" name="email_id">
			
						
				</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					<!--<button type="submit" class="btn btn-primary" name="submit">back</button>-->
			</form>
		</div>
	</body>
</html>