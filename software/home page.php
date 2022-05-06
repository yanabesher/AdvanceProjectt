<?php

session_start();

?>



<!--A Design by W3layouts
Author: W3layout   hhhhh
Author URL: http://w3layouts.com
-->


<!DOCTYPE html>
<html lang="en">
<head>
<title>Video Games Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Gaming Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- portfolio -->	
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<!-- //portfolio -->	
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

		form.example input[type=text] {
			padding: 10px;
			font-size: 17px;
			border: 1px solid grey;
			float: left;
			width: 80%;
			background: #f1f1f1;
		}

		form.example button {
			float: left;
			width: 20%;
			padding: 10px;
			background: #FF9800;
			color: white;
			font-size: 17px;
			border: 1px solid grey;
			border-left: none;
			cursor: pointer;
		}

		form.example button:hover {
			background: #f26522;
		}

		form.example::after {
			content: "";
			clear: both;
			display: table;
		}

	</style>


</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="home page.php">Video Games  <span>Store</span></a></h1>
			</div>
			<div class="header-top">
				<div class="container">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav">
										<li class="active"><a href="home page.php">Home</a></li>
										<li><a href="#gallery" class="scroll">Latest Games</a></li>
                                        <?php
                                            if($_SESSION['E']!=-1){

                                            echo ' <li><a href="login page.php" class="Button" >Log out</a></li>
										        <li><a href="Games.php">Games</a></li>
										        <!--<li><a href="orderStatus.html" class="Button" >Order Status</a></li>-->
										        <!-- بتبين بس لما نعمل ساين ان ، والساين ان بتختفي 	-->
										        <li><a href="Cart%20page.php" >Cart</a></li>
										        <li><a href="wishlist page.php" >Wishlist</a></li> 
										        <li class="active"><a href="orderStatus.php" class="Button" >Order Status</a></li>';
                                            }
                                            else
                                                echo '<li><a href="login page.php" class="Button" >Sign in / Sign up</a></li>';
                                        ?>

									</ul>
								</nav>
							</div>
							<!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="banner_text">
					<form class="example" action="" style="margin:auto;max-width:800px">
							<input type="text" placeholder="Search.." name="search">
							<button type="submit"><i class="fa fa-search"></i></button>
					</form>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="about" id="about"> 
		<div class="container"> 
			<div class="welcome">
				<div class="agileits-title"> 
					<h2>Welcome</h2>
					<p>Welcome to our game Videos Store , Now you can enjoy the benefits of home delivery of your favourate games , as well as a wide range of various games. We trust you will enjoy the ease of buying video games on-line .


						Sign in now to re-order your games or to check the status of your order.

						If you are a registered user, access your account by entering your login information into our sign-in box on this web page.

						If you are new to our webstore, please register to have new account .</p>
				</div>
			</div>
			<div class="about-w3lsrow"> 
				<div class="col-md-7 col-sm-7 w3about-img"> 
					<div class="w3about-text"> 
						<h5 class="w3l-subtitle">- About Us</h5>
						<p> Here You can find various video games with different types like : Sport , Action , Racing , Puzzel , etc .. ,also different paltforms , we hope you will find your demand  </p>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 
	<!-- markets -->
	<div class="markets" id="markets">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Our Services</h3>
			</div>

			<div class="markets-grids">
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">

						<div class="icon-left">
							<i class="fa fa-gamepad" aria-hidden="true"></i>
						</div>

						<div class="icon-right">
							<h5>Search</h5>
							<p>The user can search for a game by using it's name or the type .</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>

				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-trophy" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Order</h5>
							<p>you can buy video games on-line by order from the website . .</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>

				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Deliver</h5>
							<p>We also provide home delivery service of your favourate games.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>



				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //markets -->
	<!-- portfolio -->
	<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Some of Our Games</h3>
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				<li class="w3layouts agileits" data-filter="1">Action</li>
				<li class="w3layouts agileits" data-filter="2">Sports</li>
				<li class="w3layouts agileits" data-filter="3">Puzzle</li>
				<li class="w3layouts agileits" data-filter="4">Strategy</li>
				<li class="w3layouts agileits" data-filter="5">Racing</li>

				<li class="w3layouts agileits" data-filter="6">Adventure</li>
				<li class="w3layouts agileits" data-filter="7">Fighting</li>
				<li class="w3layouts agileits" data-filter="8">Platform</li>
				<li class="w3layouts agileits" data-filter="9">Shooter</li>
				<li class="w3layouts agileits" data-filter="10">Misc</li>

				<li class="w3layouts agileits" data-filter="11">Simulatior</li>
				<li class="w3layouts agileits" data-filter="12">Shooter</li>
				<li class="w3layouts agileits" data-filter="13">Role-Playing</li>

				<!-- Sports Action Adventure Fighting Misc Platform Sports
					 Puzzle Racing Role-Playing Shooter Simulatior Strategy -->
			</ul>

			<div class="filtr-container w3layouts agileits">

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
					<a href="Games.php" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/icon.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
					<a href="Games.php" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/icon.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
					<a href="Games.php" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/icon.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
					<a href="Games.php" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/icon.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>


				<div class="filtr-item w3layouts agileits" data-category="2, 5" data-sort="Luminous night">
					<a href="Games.php" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/icon.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 4" data-sort="City wonders">
					<a href="Games.php" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p3.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="In production">
					<a href="Games.php" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p4.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3, 4" data-sort="Industrial site">
					<a href="Games.php" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p5.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Peaceful lake">
					<a href="Games.php" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p6.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 5" data-sort="City lights">
					<a href="temp/GameProfile.html" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p7.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="temp/GameProfile.html" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p8.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="temp/GameProfile.html" target="_blank" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Game <span>Name</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Amazing Team</h3> 
			</div>
			<div class="agileits-team-grids">

				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/Aya.jpg" alt="">
						<div class="team-caption"> 
							<h4>Aya Abu Ali</h4>
							<ul>
								<li><a href="https://www.facebook.com/Ay0596" target="_blank"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img style="height: 210px;" src="images/yana.jpg" alt="">
						<div class="team-caption"> 
							<h4>Yana Besher</h4>
							<ul>
								<li><a href="https://www.facebook.com/yana.besher"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/jawna.jpg" alt="">
						<div class="team-caption">
							<h4>Jawna Atwe</h4>
							<ul>
								<li><a href="https://www.facebook.com/jawna.atwe"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-team-grids">

				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/seema.jpg" alt="">
						<div class="team-caption">
							<h4>Seema Nassar</h4>
							<ul>
								<li><a href="https://www.facebook.com/sema.nassar.7"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/entimaa.png" alt="">
						<div class="team-caption">
							<h4>Entimaa Bushkar</h4>
							<ul>
								<li><a href="https://www.facebook.com/profile.php?id=100041481788246"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/raghad.jpg" alt="">
						<div class="team-caption">
							<h4>Raghad Dabbous</h4>
							<ul>
								<li><a href="https://www.facebook.com/raghad.dabbous.75"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p class="footer-class"> Advance Software Project - 2022</p>
		</div>
	</div>
	<!-- //copyright -->


	<script src="js/jarallax.js"></script>
	<!-- <script src="js/SmoothScroll.min.js"></script> -->
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
<!--		<script type="text/javascript">-->
<!--			$(function() {-->
<!--				$('.filtr-item a').Chocolat();-->
<!--			});-->
<!--		</script>-->

	<!-- //PopUp-Box-JavaScript -->
</body>	
</html>