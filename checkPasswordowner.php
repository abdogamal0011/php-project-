<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Bayadere</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <?php include 'navBar.php'?>

    <?php 
    require_once 'inc/succes.php';
    require_once 'inc/error.php';
    ?>

<div class="forgot-password-container w-100">
    <h2>Forgot Password</h2>
    <form action="handle/forgetPassword.php" method="post" >
    <input class="input form-control m-2" placeholder="Enter user name" type="text" name="uname" id="" value="<?php if(isset($_SESSION['uname'])) echo $_SESSION['uname']; unset($_SESSION['uname']) ?>">
        

        <input type="submit" value="Reset Password">
    </form>
</div>


    
<?php include 'footer.php'?>

	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>