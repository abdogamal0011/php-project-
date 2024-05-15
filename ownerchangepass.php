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
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
            <img src="images/logo2.png" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link active" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">About</a>
                  </li>
                      <li class="nav-item dropdown">
                     <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Login
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="ownerlogin.html">Farm Owner</a>
                        <a class="dropdown-item" href="workerlogin.html">Worker</a>
                              </div>
                  </li>
                  
                  <li class="nav-item dropdown">
                     <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Register
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="ownerregister.html">Farm Owner</a>
                        <a class="dropdown-item" href="workerregister.html">Worker</a>
                              </div>
                  </li>


                                   <li class="nav-item">
                     <a class="nav-link" href="contact.html">Contact</a>
                  </li>
               </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
    <h2><a href="#" style="color: #000; text-decoration: none;">Owner Change Password</a></h2>
    <form id="changePasswordForm" action="#" method="post">
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="currentPassword" style="display: block; margin-bottom: 5px; font-weight: bold;">Current Password</label>
            <input type="password" id="currentPassword" name="currentPassword" style="width: 100%; padding: 10px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;" required>
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="newPassword" style="display: block; margin-bottom: 5px; font-weight: bold;">New Password</label>
            <input type="password" id="newPassword" name="newPassword" style="width: 100%; padding: 10px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;" required>
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="confirmPassword" style="display: block; margin-bottom: 5px; font-weight: bold;">Confirm New Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" style="width: 100%; padding: 10px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;" required>
        </div>
        <button type="submit" style="padding: 10px 20px; font-size: 16px; background-color: #4CAF50; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Change Password</button>
    </form>

    <?php

include ('dbconn.php');

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$q="select * from tblowner where  pass='$pass'";
$s=$con->query($q);
$s->execute();
$row=$s->fetch(PDO::FETCH_ASSOC);

if($n>0)
{

$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
header("Location:");
exit();
}
else{
header("Location:ownerchagepass.php");
}
// else 
// {
// echo "<br><br> Please Fill the Fields";
// }


  ?>

</div>
<?php include 'footer.php'?>

	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>