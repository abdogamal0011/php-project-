
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

    <div class="login-container">
    <h2> farm Owner Login </h2>
    <form class="form" action="handle/handlelogin.php" method="post">
    <input placeholder="Enter user Name " class="input" type="text" name="uname" id=""value="<?php if(isset($_SESSION['uname'])) echo $_SESSION['uname']; unset($_SESSION['uname']) ?>">
    <input class="input" placeholder="Enter Password" type="password" name="password" id="" value="<?php if(isset($_SESSION['password'])) echo $_SESSION['password']; unset($_SESSION['password']) ?>">
    <button class="btn btn-success" type="submit" name="submit">Login</button>
        </form>
      
    <div class="forgot-password">
        <a href="confiremPassword.php">Fotrgot Password</a>
    </div>
</div>
    
<?php include 'footer.php'?>

	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>