<!--A Design by W3layouts
Author: W3layout
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
<!-- <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all"> -->

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
	<link rel="stylesheet" href="css/GameProfileStyle.css">
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

		a{
			color: white;
			padding-right: 25px;
		}

		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			padding-top: 100px; /* Location of the box */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow-y: hidden;
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
			position: relative;
			background-color:rgb(250, 212, 23);
			margin: auto;
			padding: 0;
			border: 1px solid #888;
			/*width: 100%;*/
			/*height: 80%;*/

			height: 450px;
			width: 800px;

			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
			-webkit-animation-name: animatetop;
			-webkit-animation-duration: 0.4s;
			animation-name: animatetop;
			animation-duration: 0.4s
		}

		/* Add Animation */
		@-webkit-keyframes animatetop {
			from {top:-300px; opacity:0}
			to {top:0; opacity:1}
		}

		@keyframes animatetop {
			from {top:-300px; opacity:0}
			to {top:0; opacity:1}
		}

		/* The Close Button */
		.close {
			color: #FF9800;
			float: right;
			font-size: 40px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: red;
			text-decoration: none;
			cursor: pointer;
			padding-top: 0px;
		}

		.modal-header {
			padding: 2px 10px;
			height: 30px;
			background-color: white;
			color: white;
		}

		.modal-body {padding: 2px 16px;}
		#tt{
			color: white;
		}

		a{ padding-right:  1.8em }




	</style>

	<link rel="stylesheet" type="text/css" href="css/productGridStyle.css" />

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
										<li class="active"><a href="Games.php">Games</a></li>
										<li><a href="home page.php">Home</a></li>
										<li><a href="login page.php" class="Button" >Sign in / Sign up</a></li>
										<!--<li><a href="orderStatus.html" class="Button" >Order Status</a></li>-->
										<!-- بتبين بس لما نعمل ساين ان ، والساين ان بتختفي 	-->
										<li><a href="Cart%20page.php" >Cart</a></li>
										<li><a href="wishlist page.php" >Wishlist</a></li>
                                        <li><a href="template/index.php" >admin</a></li>
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
<!--												<h3>j</h3>-->
<!--												<p>k</p>  &lt;!&ndash;hereeeeeeeeeeeeeeeeeeeeeeeeee&ndash;&gt;-->
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

	<!-- portfolio -->
	<div class="portfolio" id="gallery" style="margin-top: -100px">
		<div class="container">
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

		</div>
	</div>
	<div id="wrap" style="margin-top: -50px">
		<div id="columns" class="columns_4">
			<div class="filtr-container w3layouts agileits">

			<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
			<figure style=" width:90%; margin: 0 10px 30px; ">
				<img src="images/img.png">
				<figcaption>Game Name</figcaption>
				<span class="price">Game Price</span>
				<a class="button"  id="myBtn" onclick="document.body.style.overflow = 'hidden'"
				>View</a>



			</figure>

			</div>


				<div id="myModal" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<div class="modal-header">
							<span class="close" style="color: #FF9800">&times;</span>
							<h2 id="tt"></h2>
						</div>
						<div class="modal-body">

							<div class="Gamecontainer" style="margin: auto"  >

								<div class="card">
									<div id="shopping">
										<i class="fas fa-cart-plus"><sup id="items-added"></sup></i>
									</div>


									<div class="images">
										<h2 >Game Name</h2>
										<div class="slider"><img style="width: 80%;" id="big-image" src="images/img.png" alt=""></div>
										<!-- الصورة هون ثابتة للكل -->
									</div>


									<div class="infos">
										<h1>Game Name</h1><br>

										<div class="price">
											<h3>Game Price</h3>
										</div>
										<div id="more-infos">
											<h5 class="choose">Description</h5>
										</div>
										<div id="info-content">
											<p  class="paragraph" style="display: block;">
												Game info </div>
										<div class="buttons">
											<button style="height: 40px;width: 370px; " id="add-to-cart"><i class="fas fa-shopping-cart"></i>ADD TO CART</button>
											<button style="height: 40px;width: 300px; ">SAVE</button>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
				<script>
					// Get the modal
					var modal = document.getElementById("myModal");

					// Get the button that opens the modal
					var btn = document.getElementById("myBtn");

					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName("close")[0];

					// When the user clicks the button, open the modal
					btn.onclick = function() {
						modal.style.display = "block";
					}

					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
						modal.style.display = "none";
					}

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
						if (event.target == modal) {
							modal.style.display = "none";
						}
					}
				</script>











			<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">

				<figure style=" width:90%; margin: 0 10px 30px; ">

				<img src="images/img.png">
				<figcaption>Game Name</figcaption>
				<span class="price">Game Price</span>
				<a class="button" href="#">View</a>
			</figure>

			</div>

			<div class="filtr-item w3layouts agileits portfolio-t" data-category="2, 3" data-sort="Busy streets">

				<figure style=" width:90%; margin-right:1%;">

				<img src="images/img.png">
				<figcaption>Game Name</figcaption>
				<span class="price">Game Price</span>
				<a class="button" href="#">View</a>
			</figure>

			</div>

			<div class="filtr-item w3layouts agileits portfolio-t" data-category="2, 3" data-sort="Busy streets">

				<figure style=" width:90%; margin-right:1%;">

				<img src="images/img.png">
				<figcaption>Game Name</figcaption>
				<span class="price">Game Price</span>
				<a class="button" href="#">View</a>
			</figure>

			</div>

			<div class="filtr-item w3layouts agileits portfolio-t" data-category="4, 9" data-sort="Busy streets">

				<figure style=" width:90%; margin-right:1%;">

				<img src="images/img.png">
				<figcaption>Game Name</figcaption>
				<span class="price">Game Price</span>
				<a class="button" href="#">View</a>
			</figure>

			</div>

			<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">

				<figure style=" width:90%; margin-right:1%;">

				<img src="images/img.png">
				<figcaption>Game Name</figcaption>
				<span class="price">Game Price</span>
				<a class="button" href="#">View</a>
			</figure>
			</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">

					<figure style=" width:90%; margin-right:1%;">

						<img src="images/img.png">
						<figcaption>Game Name</figcaption>
						<span class="price">Game Price</span>
						<a class="button" href="#">View</a>
					</figure>
				</div>
			</div>

		</div>
	</div>
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