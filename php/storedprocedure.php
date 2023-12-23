<?php include 'connect.php';?>
<?php session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="new1.css">
<!-- Required meta tags -->
		

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.button {
  background-color: #008CBA; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<body>
<div class="co"><div class="p-3 mb-2 bg-secondary text-white"><h2>CABLE OPERATOR</h2></div></div>
<div id="logo"><i class='fas fa-exclamation-circle' style='font-size:45px;color:red'></i></div>
<div class="sidebar my-0.5">
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
  <a href="operations.php"><B>STORED PROCEDURE</B></a>
  <a class="active" href="logout1.php"><B>LOGOUT</B></a></H4>
</div>

<div class="content">
<br>
<h2 ><b>STORED PROCEDURE</b></h2>
<hr>


<table class="table table-striped">
  <thead>
    <tr>
      <!--<th scope="col">id</th>-->
      <th scope="col">customer_details_cust_id</th>
      <th scope="col">action</th>
      <th scope="col">cdate</th>
	  
    </tr>
  </thead>
  <tbody>
	<?php
	
	
	$sql="SELECT * from PROCEDURES  " ;
	$result=mysqli_query($conn,$sql);
	
	if($result){
		while($row=mysqli_fetch_assoc($result)){
			//$id=$row['id'];
			$customer_details_cust_id=$row['customer_details_cust_id'];
			$action=$row['action'];
			$cdate=$row['cdate'];
			
			echo '<tr>
			  <th scope="row">'.$customer_details_cust_id.'</th>
			 
			  <td>'.$action.'</td>
			  <td>'.$cdate.'</td>
			  
			</tr>';
		}
	}
	?>
	
				
			
  </tbody>
</table>


  
</div>

</body>
</html>
<?php 
}else{
	header("Location: index1.php");
	exit();
}
?>




