<?php 
include 'connect.php';
$slno=$_GET['updateid'];
$sql="SELECT * from RECHARGE_DETAILS WHERE slno=$slno";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$cust_name=$row['cust_name'];
$pack_name=$row['pack_name'];
$sb_no=$row['sb_no'];
$recharge_date=$row['recharge_date'];
$end_date=$row['end_date'];
$amount=$row['amount'];
$duration=$row['duration']; 
if(isset($_POST["submit"])){
	$slno=$_POST[ "slno" ];
	$cust_name=$_POST[ "cust_name" ];
	$pack_name=$_POST[ "pack_name"];
	$pack_name=$_POST[ "pack_name"];
	$sb_no=$_POST[ "sb_no"];
	$end_date=$_POST["end_date"]; 
	$amount=$_POST[ "amount"];
	$duration=$_POST["duration"];
	
	 

	$sql="UPDATE RECHARGE_DETAILS SET slno=$slno,cust_name= '$cust_name',pack_name= '$pack_name',sb_no='$sb_no',recharge_date= '$recharge_date',end_date= '$end_date',amount= '$amount',duration= '$duration' WHERE cust_id=$cust_id";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Updated successfully";
		header('location:recharge_details.php');
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

		<title>RECHARGE DETAILS</title>


	</head>
	<body>
		<div class="container my-5">
			<form method="post">
				<div class="form-group">
						<label>slno</label>
						<input type="number" class="form-control" placeholder="Enter slno" autocomplete="off" name="slno" value=<?php echo $slno;?>>
						<label>cust_name</label>
						<input type="number" class="form-control" placeholder="Enter cust_name" autocomplete="off" name="cust_name" value=<?php echo $cust_name;?>>
						<label>pack_name</label>
						<input type="text" class="form-control" placeholder="Enter pack_name" autocomplete="off" name="pack_name" value=<?php echo $pack_name;?>>
						<label>sb_no</label>
						<input type="varchar" class="form-control" placeholder="Enter sb_no" autocomplete="off" name="sb_no" value=<?php echo $sb_no;?>>
						<label>recharge_date</label>
						<input type="date" class="form-control" placeholder="Enter recharge_date" autocomplete="off" name="recharge_date" value=<?php echo $recharge_date;?>>
						<label>end_date</label>
						<input type="date" class="form-control" placeholder="Enter end_date" autocomplete="off" name="end_date" value=<?php echo $end_date;?>>
						<label>amount</label>
						<input type="number" class="form-control" placeholder="Enter amount" autocomplete="off" name="amount" value=<?php echo $amount;?>>
						<label>duration</label>
						<input type="number" class="form-control" placeholder="Enter duration" autocomplete="off" name="duration" value=<?php echo $duration;?>>
			
						
				</div>
					<button type="submit" class="btn btn-primary" name="submit">Update</button>
			</form>
		</div>
	</body>
</html>