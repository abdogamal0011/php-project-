<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Bayadere</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/all.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <?php include 'navBar.php'?>


    <div class="login-container">
    <?php 
    require_once 'inc/error.php';
    ?>
    <form class="form" action="handle/handlRegisterWorker.php" method="post">
    <h3 class="text-success">Worker Register </h3>
            <input placeholder="Enter Full  Name" class="input" type="text" name="name" id=""value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name']; unset($_SESSION['name']) ?>">
            <input class="input" placeholder="Enter your phone " type="text" name="phone" id="" value="<?php if(isset($_SESSION['phone'])) echo $_SESSION['phone']; unset($_SESSION['phone']) ?>">
            <input class="input d-none" placeholder="Enter your adress " type="text" name="role" id="" value="Worker">
			<button type="submit" class="btn btn-success" name="submit">Register</button>
    </form>





</div>
 <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
					<!--headin5_amrc-->
					<p class="mb10">Shinas, Al Batinah North Governorate, Sultanate of Oman</p>
					<p><i class="fa fa-location-arrow"></i>420-69 Shinas st, road 489</p>
					<p><i class="fa fa-phone"></i> +968 9560 6442</p>
					<p><i class="fa fa fa-envelope"></i> bayaderell@gmail.com </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
					<ul class="footer_ul2_amrc">
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>Bayadere, an eco-care company...<a href="#">https://www.bayadere.com/</a></p>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
					<ul class="footer_ul_amrc">
						<li><a href="about.html">About Us</a></li>
						<li><a href="services.html">Service Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
								</div>
			</div>
		</div>
        <div class="container">
            <div class="footer-logo">
				<a href="#"><img src="images/cover2.png" alt="" /></a>
			</div>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="copyright text-center">All Rights Reserved. &copy; 2024 <a href="#">Bayadere Farm Services</a>  
				            </p>
            <ul class="social_footer_ul">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://www.instagram.com/byader.om?igsh=MWFydGY1bHJnMTE5aw=="><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </footer>
	  
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>