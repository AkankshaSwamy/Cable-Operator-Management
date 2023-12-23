<?php 
include 'connect.php';
$slno=$_GET['updateid'];
$sql="SELECT * from PACK_DETAILS WHERE slno= $slno";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$pack_name=$row['pack_name'];
$pack_amt=$row['pack_amt'];
$pack_type=$row['pack_type'];
$pack_duration=$row['pack_duration'];
if(isset($_POST["submit"])){
	$slno=$_POST[ "slno" ];
	$pack_name=$_POST[ "pack_name" ];
	$pack_amt=$_POST[ "pack_amt"];
	$pack_type=$_POST[ "pack_type"];
	$pack_duration=$_POST["pack_duration"]; 
	
	 

	$sql="UPDATE PACK_DETAILS SET slno=$slno,pack_name= $pack_name,pack_amt= '$pack_amt',pack_type= '$pack_type',pack_duration= '$pack_duration' WHERE slno=$slno";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Updated successfully";
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
						<input type="number" class="form-control" placeholder="Enter slno" autocomplete="off" name="slno" value=<?php echo $slno;?>>
						<label>pack_name</label>
						<input type="text" class="form-control" placeholder="Enter pack_name" autocomplete="off" name="pack_name" value=<?php echo $pack_name;?>>
						<label>pack_amt</label>
						<input type="text" class="form-control" placeholder="Enter pack_amt" autocomplete="off" name="pack_amt" value=<?php echo $pack_amt;?>>
						<label>pack_type</label>
						<input type="text" class="form-control" placeholder="Enter pack_type" autocomplete="off" name="pack_type" value=<?php echo $pack_type;?>>
						<label>pack_duration</label>
						<input type="text" class="form-control" placeholder="Enter duration" autocomplete="off" name="duration" value=<?php echo $pack_duration;?>>
						
			
						
				</div>
					<button type="submit" class="btn btn-primary" name="submit">Update</button>
			</form>
		</div>
	</body>
</html>