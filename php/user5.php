<?php 
include 'connect.php'; 
if(isset($_POST["submit"])){
	$slno=$_POST[ "slno" ];
	$sb_no=$_POST[ "sb_no"];
	$cust_id=$_POST[ "cust_id"];
	$cost=$_POST["cost"]; 
	$type=$_POST[ "type"];
	
	
	 

	$sql="INSERT INTO SETTUPBOX_DETAILS(slno,sb_no,cust_id,cost,type) values('$slno', '$sb_no', '$cust_id','$cost','$type')";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Data inserted successfully";
		header('location:settupbox_details.php');
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

		<title>SETTUP-BOX DETAILS</title>


	</head>
	<body>
		<div class="container my-5">
			<form method="post">
				<div class="form-group">
						<label>slno</label>
						<input type="number" class="form-control" placeholder="Enter slno" autocomplete="off" name="slno">
						<label>sb_no</label>
						<input type="number" class="form-control" placeholder="Enter sb_no" autocomplete="off" name="sb_no">
						<label>cust_id</label>
						<input type="number" class="form-control" placeholder="Enter cust_id" autocomplete="off" name="cust_id">
						<label>cost</label>
						<input type="number" class="form-control" placeholder="Enter cost" autocomplete="off" name="cost">
						<label>type</label>
						<input type="text" class="form-control" placeholder="Enter type" autocomplete="off" name="type">
						
			
						
				</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
		</div>
	</body>
</html>