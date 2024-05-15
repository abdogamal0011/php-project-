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
    <form action="handle/UpdatePassword.php" method="post" >
        <input class="form-control m-2" placeholder="Enter User name" type="text" id="new password" name="uname" value="<?php if(isset($_SESSION['uname'])) echo $_SESSION['uname']; unset($_SESSION['uname']) ?>">
        <input class="form-control m-2" placeholder="Enter password" type="password" id="new password" name="newPassword" value="<?php if(isset($_SESSION['newPassword'])) echo $_SESSION['newPassword']; unset($_SESSION['newPassword']) ?>">
        <input class="form-control m-2" placeholder="Enter confirem Password" type="password" id="new password" name="Confirempassword" value="<?php if(isset($_SESSION['Confirempassword'])) echo $_SESSION['Confirempassword']; unset($_SESSION['Confirempassword']) ?>">
        

         <button class="btn btn-success" type="submit" name="submit">Reset Password</button>
    </form>
</div>


    
<?php include 'footer.php'?>

	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>