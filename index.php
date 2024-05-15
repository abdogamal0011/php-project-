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
    
    <header class="slider-main">
   

   
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Welcome to Bayedere Farm Services</h3>
                     <p>Harvesting Opportunities, Connecting Farms and Farmers</p>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Grow Together</h3>
                     <p>Bridging Lands and Hands for Prosperous Harvests</p>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Cultivate Your Future</h3>
                     <p>Uniting Farms and Farmers for Bounty Beyond Borders</p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">
        <div class="services-bar">
            <h1 class="my-4">Our Best Services </h1>
            <!-- Services Section -->
            <!-- <div class="row">
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Agricultural Services</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/services-img-01.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">Our agricultural equipment rental service offers a hassle-free solution for farm owners seeking efficient and cost-effective tools.</p>
                     </div>
                      <div class="card-footer">
                        <a href="rental.html" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Plant Workshops</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/services-img-02.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">Whether you're a beginner or a seasoned enthusiast, explore both free and paid sessions designed to nurture your green skills. Grow your garden expertise with us – because every plant deserves a caring touch!</p>
                     </div>
                      <div class="card-footer">
                        <a href="soil.html" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Farmwork Match</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/worker2.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text"> Discover a streamlined platform where farm owners post available positions and farmers find their next job effortlessly.</p>
                     </div>
                      <div class="card-footer">
                        <a href="pest.html" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- /.row -->
        </div>
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                  <h2>Welcome to Bayadere</h2>
                  <p>Our platform serves as a central hub, connecting expats with global farming opportunities, simplifying recruitment for farm owners, providing hassle-free access to agricultural equipment, fostering a supportive community, and advocating for sustainable farming practices. Join us to cultivate success in the world of agriculture!</p>
                  <h5>Our smart approach</h5>
                  <ul>
                     <li>Links expats to various farm jobs, creating a worldwide farming family.</li>
                     <li>Simplifies recruitment for farm owners, connecting them with skilled and dependable workers.</li>
                     <li>Offers farmers top-notch equipment for rent, making cultivation efficient and affordable.</li>
                     <li>Creates connections with forums and events, building a friendly and knowledgeable farming community.</li>
                     <li>Encourages eco-friendly practices, providing resources for sustainable farming and a greener future.</li>
                  </ul>
                   </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="images/omani3.jpg" alt="" />
               </div>
            </div>
            <!-- /.row -->
        </div>
                <hr>
        <!-- Get In Touch Now Section -->
        <!-- <div class="row mb-4">
            <div class="col-md-8">
               <p>Connect with us today and start the conversation. Reach out now to explore opportunities, ask questions, or share your thoughts. We're here to assist you every step of the way!</p>
            </div>
            <div class="col-md-4">
               <a class="btn btn-lg btn-secondary btn-block" href="#">Get In Touch Now</a>
            </div>
        </div> -->
    </div>
    <!-- /.container -->
    <!--footer starts from here-->


    <?php include 'footer.php'?>

	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>