<?php session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HOME</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="new1.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		</head>
	<body>
		<div class="w3-container w3-blue-grey"><h2>CABLE OPERATOR</h2></div>
		<div id="logo"><i class='fas fa-exclamation-circle' style='font-size:45px;color:red'></i></div>
		<div class="sidebar">
			<img src="admin.jfif" width="80px" height="60px" >
			<p><H5><B>WELCOME,<?php echo $_SESSION['user_name']; ?></b></H5></p>
			<H4><a class="active" href="home1.php"><B>HOME</B></a>
			<a href="customer_details.php"><B>CUSTOMER DETAILS</B></a>
			<a href="connection_details.php"><B>CONNECTION DETAILS</B></a>
			<a href="pack_details.php"><B>PACK DETAILS</B></a>
			  <a href="settupbox_details.php"><B>SET TOP BOX DETAILS</B></a>
			  <a href="recharge_details.php"><B>RECHARGE DETAILS</B></a>
			  <a href="payment_details.php"><B>PAYMENT DETAILS</B></a>
			   <a href="operations.php"><B>OPERATIONS</B></a>
			  
			<a class="active" href="logout1.php"><B>LOGOUT</B></a></h4>
		</div>
		<div class="content">
			<br>
			<h2><b>WELCOME TO ADMIN</b></h2>
			<hr>
			<img src="welcome1.jpg" width="1142px" height="550px" >
		</div>
		</div>
		
	</body>
</html>   
<?php 
}else{
	header("Location: index1.php");
	exit();
}
?>