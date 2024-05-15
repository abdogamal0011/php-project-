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
                        <a class="dropdown-item" href="workerlogin.html">Admin</a>
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
    <div class="login-container">
    <h2>Update Worker Profile</h2>
    <form action="#" method="post">
        
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name">

        <label for="phone_number">Phone Number:</label>
        <input type="phone" id="phone_number" name="phone_number">
        <div class="button-container">
            <input type="submit" value="Update">
            <button type="button" onclick="window.location.href='your_cancel_url_here'">Cancel</button>
        </div>
        <a href="workerchangepass.html">Change Password</a>
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
					<!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>Bayadere, an eco-care company...<a href="#">https://www.bayadere.com/</a></p>
						</li>
					</ul>
					<!--footer_ul2_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li><a href="about.html">About Us</a></li>
						<li><a href="services.html">Service Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
					<!--footer_ul_amrc ends here-->
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
            <!--social_footer_ul ends here-->
        </div>
    </footer>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>