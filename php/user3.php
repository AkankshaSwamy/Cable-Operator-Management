<?php 
include 'connect.php'; 
if(isset($_POST["submit"])){
	$slno=$_POST[ "slno" ];
	$pack_name=$_POST[ "pack_name" ];
	$pack_amt=$_POST[ "pack_amt"];
	$pack_type=$_POST[ "pack_type"];
	$pack_duration=$_POST["pack_duration"]; 
	
	 

	$sql="INSERT INTO PACK_DETAILS(slno,pack_name,pack_amt,pack_type,pack_duration) values('$slno','$pack_name','$pack_amt','$pack_type','$pack_duration')";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Data inserted successfully";
		header('location:pack_details.php');
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

		<title>PACK DETAILS</title>


	</head>
	<body>
		<div class="container my-5">
			<form method="post">
				<div class="form-group">
						<label>slno</label>
						<input type="number" class="form-control" placeholder="Enter slno" autocomplete="off" name="slno">
						<label>pack_name</label>
						<input type="text" class="form-control" placeholder="Enter pack name" autocomplete="off" name="pack_name">
						<label>pack_amt</label>
						<input type="number" class="form-control" placeholder="Enter amount" autocomplete="off" name="pack_amt">
						<label>pack_type</label>
						<input type="text" class="form-control" placeholder="Enter type" autocomplete="off" name="pack_type">
						<label>pack_duration</label>
						<input type="text" class="form-control" placeholder="Enter duration" autocomplete="off" name="pack_duration">
						
						
				</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
		</div>
	</body>
</html>