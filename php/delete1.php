<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$cust_id=$_GET['deleteid'];
	
	$sql="DELETE from CONNECTION_DETAILS where cust_id=$cust_id";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Deleted successfully";
		header('location:connection_details.php');
	}else{
		die(mysqli_error($conn));
	}
}
	?>