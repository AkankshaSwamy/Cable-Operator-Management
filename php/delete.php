<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$cust_id=$_GET['deleteid'];
	
	$sql="DELETE from CUSTOMER_DETAILS where cust_id=$cust_id";
	$result=mysqli_query($conn,$sql);
	if($result){
		
		header('location:customer_details.php');
		//echo "Deleted successfully";
	}else{
		die(mysqli_error($conn));
	}
}
	?>