<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$slno=$_GET['deleteid'];
	
	$sql="DELETE from RECHARGE_DETAILS where slno=$slno";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Deleted successfully";
		header('location:recharge_details.php');
	}else{
		die(mysqli_error($conn));
	}
}
	?>