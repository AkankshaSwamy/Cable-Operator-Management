<?php 
include 'connect.php';
$slno=$_GET['updateid'];
$sql="SELECT * from PAYMENT_DETAILS WHERE slno=$slno";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$cust_name=$row['cust_name'];
$amount=$row['amount'];
$pay_date=$row['pay_date'];

if(isset($_POST["submit"])){
	$slno=$_POST[ "slno" ];
	$cust_name=$_POST[ "cust_name"];
	$amount=$_POST[ "amount"];
	$pay_date=$_POST["pay_date"]; 
	
	 

	$sql="UPDATE PAYMENT_DETAILS SET slno=$slno,cust_name= '$cust_name',amount= '$amount',pay_date= '$pay_date' WHERE slno=$slno";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Updated successfully";
		header('location:payment_details.php');
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

		<title>PAYMENT DETAILS</title>


	</head>
	<body>
		<div class="container my-5">
			<form method="post">
				<div class="form-group">
						<label>slno</label>
						<input type="number" class="form-control" placeholder="Enter slno" autocomplete="off" name="slno" value=<?php echo $slno;?>>
						<label>cust_name</label>
						<input type="text" class="form-control" placeholder="Enter cust_name" autocomplete="off" name="cust_name" value=<?php echo $cust_name;?>>
						<label>amount</label>
						<input type="number" class="form-control" placeholder="Enter amount" autocomplete="off" name="amount" value=<?php echo $amount;?>>
						<label>pay_date</label>
						<input type="date" class="form-control" placeholder="Enter pay_date" autocomplete="off" name="pay_date" value=<?php echo $pay_date;?>>
						
						
				</div>
					<button type="submit" class="btn btn-primary" name="submit">Update</button>
			</form>
		</div>
	</body>
</html>