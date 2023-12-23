<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$slno=$_GET['deleteid'];
	
	$sql="DELETE from SETTUPBOX_DETAILS where slno=$slno";
	$result=mysqli_query($conn,$sql);
	if($result){
		
		header('location:settupbox_details.php');
		//echo "Deleted successfully";
	}else{
		die(mysqli_error($conn));
	}
}
	?>