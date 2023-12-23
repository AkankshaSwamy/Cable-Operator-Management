<?php 
include 'connect.php';
$slno=$_GET['updateid'];
$sql="SELECT * from SETTUPBOX_DETAILS WHERE slno=$slno";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$sb_no=$row['sb_no'];
$cust_id=$row['cust_id'];
$cost=$row['cost'];
$type=$row['type'];
 
if(isset($_POST["submit"])){
	$slno=$_POST[ "slno" ];
	$sb_no=$_POST[ "sb_no"];
	$cust_id=$_POST[ "cust_id"];
	$cost=$_POST["cost"]; 
	$type=$_POST[ "type"];
	
	
	 

	$sql="UPDATE SETTUPBOX_DETAILS SET slno= $slno,sb_no= '$sb_no',cust_id= '$cust_id',cost= '$cost',type= '$type' WHERE slno=$slno";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Updated successfully";
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
						<input type="number" class="form-control" placeholder="Enter slno" autocomplete="off" name="slno" value=<?php echo $slno;?>>
						<label>sb_no</label>
						<input type="number" class="form-control" placeholder="Enter sb_no" autocomplete="off" name="sb_no" value=<?php echo $sb_no;?>>
						<label>cust_id</label>
						<input type="number" class="form-control" placeholder="Enter cust_id" autocomplete="off" name="cust_id" value=<?php echo $cust_id;?>>
						<label>cost</label>
						<input type="number" class="form-control" placeholder="Enter cost" autocomplete="off" name="cost" value=<?php echo $cost;?>>
						<label>type</label>
						<input type="text" class="form-control" placeholder="Enter type" autocomplete="off" name="type" value=<?php echo $type;?>>
						
			
						
				</div>
					<button type="submit" class="btn btn-primary" name="submit">Update</button>
			</form>
		</div>
	</body>
</html>