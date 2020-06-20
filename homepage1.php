<?php
  
// Starting the session, to use and 
// store data in session variable 
session_start(); 
   
// If the session variable is empty, this  
// means the user is yet to login 
// User will be sent to 'login.php' page 
// to allow the user to login 
/*if (!isset($_SESSION['username'])) { 
    $_SESSION['msg'] = "You have to log in first"; 
    header('location: signin.html'); 
} */
   
 
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Care4Me2 Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container pt-5">
			<!--<div class="row justify-content-between">-->
				<div class="col">
					<img src="images/website_logo1.png" alt="Care4Me2 Logo">
				</div>
				
			<!--</div>-->
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="homepage.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="reportinc.html" class="nav-link">Report Incident</a></li>
	        	<li class="nav-item"><a href="donate.html" class="nav-link">Donate</a></li>
	        	<li class="nav-item"><a href="volunteer.html" class="nav-link">Volunteer</a></li>
	        <!--	<li class="nav-item"><a href="blog.html" class="nav-link">Donate</a></li> -->
	          <li class="nav-item"><a href="testimonials.html" class="nav-link">Testimonials</a></li>
                  <li class="nav-item"><a href="register.html" class="nav-link">Register</a></li>
                  <li class="nav-item"><a href="signin.html" class="nav-link">Sign In</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/carousel-dog.jpg); max-width:100%; max-height:100%;">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-12 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2>We're here to help animals</h2>
			            <h1 class="mb-3">Care4Me2</h1>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/carousel-cat.jpg); max-width:100%; max-height:100%;">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-12 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2>Report an animal in distress</h2>
			            <h1 class="mb-3">We care for all animals</h1>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/carousel-all.jpg); max-width:100%; max-height:100%;">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-12 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2>Come volunteer with us</h2>
			            <h1 class="mb-3">We care for animals</h1>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>
   	
	<div class="container-fluid px-lg-5">
				<div class="row">
					<div class="col-md-9 py-5">
						<!--<div class="row">-->
							<div class="col-md-4 mb-md-0 mb-4">
                                                                <?php
									//echo $_SESSION['uname']; 
									echo "Welcome!";
									?>

								<h1>Would you Care4me2 </h1>
                                                                <h2>About us</h2>
								<p>Welcome to Care4Me2! Care4Me2 is a platform for animal lovers to come together and make world a better place for our furry friends. 
                                                                Care4Me2 provides users a platform to report animal abuse, adopt animals, join our volunteer force or donate to our worthy cause. We conduct regular rescue missions to save animals who are facing abuse, or who are victims of natural and man-made disasters. 
                                                                We have a dedicated team of veterinary doctors who not only check on the rescued animals, but also provide regular free health check-up camps for animals.</p><p>
                                                                We firmly believe that animals make the world a much better place for humans. It is our responsibility that animals get all the help that they can get from us. Our website encourages more volunteers to join this noble task and make world a better place. With just a short form, you can register yourself as a volunteer and join us when we go for a rescue mission. Our animal helpline page helps concerned users report acts of animal abuse and notify us of injured animals, which our volunteers and veterinarians take care of.
                                                                </p><p>Last but not the least, to keep this mission going, we do accept donations from organizations and individuals. The donations help us to survive and ensure that our plan of helping animals and making world a happier place goes on.
                                                                </p>
								
							</div>
						<!--</div>-->
					</div>
				</div>
	</div>

    <footer class="footer">
			<div class="container-fluid px-lg-5">
				<div class="row">
					<div class="col-md-9 py-5">
						<div class="row">
							<div class="col-md-4 mb-md-0 mb-4">
								<!--<h2 class="footer-heading">About us</h2>-->
								<p>	&copy;Copyright Team 12</p>
								<ul class="ftco-footer-social p-0">
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
		            </ul>
							</div>
							
						</div>
						
					</div>
					
				</div>
			</div>
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>