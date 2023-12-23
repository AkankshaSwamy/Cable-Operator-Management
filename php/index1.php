<!DOCTYPE html>
<html>
<head>

    <title>LOGIN</title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css”>
<link rel="stylesheet" type="text/css" href="vendor/animsition/ess/animsition.min.css”>
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css”>
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="new.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	
</head>

<body>
	<div class="bg-img">
		<form action="login1.php" method="post" class="container">
 
		<p align="center" style="font-size:30px"><b>CABLE OPERATOR MANAGEMENT SYSTEM</B></P>
		

       

       <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label><b>User Name</b></label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label><b>Password</b></label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>
	
		
		
         

    </form>
	</div>	
</body>

</html>

