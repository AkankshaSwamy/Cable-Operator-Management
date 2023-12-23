<?php 
include 'connect.php';
$cust_id=$_GET['updateid'];
$sql="SELECT * from CONNECTION_DETAILS WHERE cust_id=$cust_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$cust_name=$row['cust_name'];
$sb_no=$row['sb_no'];                                
$conn_date=$row['conn_date'];
$duration=$row['duration'];
$conn_amt=$row['conn_amt']; 
if(isset($_POST["submit"])){
	$cust_id=$_POST[ "cust_id" ];
	$cust_name=$_POST[ "cust_name"];
	$sb_no=$_POST[ "sb_no"];
	$conn_date=$_POST[ "conn_date"];
	$duration=$_POST["duration"]; 
	$conn_amt=$_POST["conn_amt"];
	
	 

	$sql="UPDATE CONNECTION_DETAILS SET cust_id= $cust_id,cust_name= '$cust_name',sb_no= '$sb_no',conn_date= '$conn_date',duration= '$duration',conn_amt= '$conn_amt' WHERE cust_id=$cust_id";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Updated successfully";
		header('location:connection_details.php');
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

		<title>CONNECTION DETAILS</title>


	</head>
	<body>
		<div class="container my-5">
			<form method="post">
				<div class="form-group">
						<label>cust_id</label>
						<input type="number" class="form-control" placeholder="Enter cust_id" autocomplete="off" name="cust_id" value=<?php echo $cust_id;?>>
						<label>cust_name</label>
						<input type="text" class="form-control" placeholder="Enter cust_name" autocomplete="off" name="cust_name" value=<?php echo $cust_name;?>>
						<label>sb_no</label>
						<input type="text" class="form-control" placeholder="Enter sb_no" autocomplete="off" name="sb_no" value=<?php echo $sb_no;?>>
						<label>conn_date</label>
						<input type="date" class="form-control" placeholder="Enter connection date" autocomplete="off" name="conn_date" value=<?php echo $conn_date;?>>
						<label>duration</label>
						<input type="number" class="form-control" placeholder="Enter duration" autocomplete="off" name="duration" value=<?php echo $duration;?>>
						<label>conn_amt</label>
						<input type="number" class="form-control" placeholder="Enter amount" autocomplete="off" name="conn_amt" value=<?php echo $conn_amt;?>>
			
						
				</div>
					<button type="submit" class="btn btn-primary" name="submit">Update</button>
			</form>
		</div>
	</body>
</html>