<?php
session_start();

//$mem = 0; //To check if he/she is a member or not
if (isset($_POST['LoginSubmit'])){
    if (isset($_POST['ELog']) && isset($_POST['passLog'])) {
        $_SESSION['ismember'] = 0;
        $_SESSION['E']=$_POST['ELog'];
        @$dp = new mysqli('localhost', 'root', '', 'advance');
        if (mysqli_connect_errno()) {
            echo "Error in connection with data base";
            die();
        }
        $strQry = 'select * from member';
        $res = $dp->query($strQry);
        for ($i = 0; $i < $res->num_rows; $i++) {
            $row = $res->fetch_assoc();
            if ($_POST['ELog'] == $row['email'] && $_POST['passLog'] == $row['password']) {
                $_SESSION['ismember'] = 1;
               // $mem = 1;
                header("location:Games.php");
            }
        }
//        if ($mem == 0) {
//            //echo '<p style="color: red ; position: relative ; left: 622px ; top: 390px;z-index: 5">incorrect email or password</p>';
//           // $("#incorrect").show();
//        }

    }}


else if (isset($_POST['SignupSubmit'])){
    if(isset($_POST['UserName']) && isset($_POST['email']) && isset($_POST['password'])){
        $_SESSION['exist'] = 0;
        @$dp=new mysqli('localhost','root','','advance');
        if(mysqli_connect_errno()){
            echo "Error in connection with data base";
            die();
        }
        $strQry='select * from member';
        $res=$dp ->query($strQry);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res ->fetch_assoc();
            if( $_POST['email']==$row['email'] ){
                $_SESSION['exist']=1;
                //echo  '<p style="color: red ; position: relative ; left: 622px ; top: 390px;z-index: 5">You are already a member</p>';
                echo '<div id="msgBox" style="width: 450px ;filter: alpha(opacity=50);opacity: 1; height: 170px;visibility: visible ; position: fixed;left: 480px ;top: 230px; background: white;z-index: 100">
    <table style="width:100% ;height:100%; cellpadding : 5">
        <tbody>
        <tr>
        <br>
        </tr>
        
        <tr>
             <td style="text-align: center">
                <span style="color: black; font-size: 20px; " >Email already exist </span>
            </td>
         </tr>
         <tr>
            <td>
               <br>
            </td>
        </tr>
        <tr>
            <td>
               <hr>
            </td>
        </tr>
        <tr>
        
            <td style="background-color:white" align="center" valign="center">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <form>
                                <a href="Games.php">  <input type="button" value="Login"  style="background: white ;border:none; width: 80px;height:40px"></a>
                            </form>
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        

        </tbody>
    </table>
</div>

<div id="overlay" style="z-index: 50;position: fixed;width: 100%;height: 100%;left: 0;top: 0;visibility: visible ; background-color: silver;
filter: alpha(opacity=50);opacity: 0.5">

</div>';
            }
        }
        if(!$_SESSION['exist']){
            $name=$_POST['UserName'];
            $email=$_POST['email'];
            $pas=$_POST['password'];
            $stm="insert into member values ('".$email."','".$name."','".$pas."')";
            $result=$dp ->query($stm);
            header("location:login page.php");
        }
    }
}

//else if (isset($_POST['asa'])){
//    @$dp = new mysqli('localhost', 'root', '', 'newdb');
//    if (mysqli_connect_errno()) {
//        echo "Error in connection with data base";
//        die();
//    }
//    $strQry = 'select * from admins';
//    $res = $dp->query($strQry);
//    $f=0;
//    for ($i = 0; $i < $res->num_rows; $i++) {
//        $row = $res->fetch_assoc();
//        if ($_POST['ELog'] == $row['Email'] && $_POST['passLog'] == $row['password']) {
//            $f=1;
//            header("location:Adminhome.php");
//        }
//
//    }
//    if ($f == 0) {
//        echo '<p style="color: red ; position: relative ; left: 620px ; top: 395px;z-index: 5">incorrect email or password</p>';
//
//    }
//
//}


?>


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gaming Store a Games Category Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Gaming Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
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

</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="home%20page.php">Video Games  <span>Store</span></a></h1>
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
										<li class="active"><a href="login page.php" class="Button" >Sign in / Sign up</a></li>
										<li><a href="home%20page.php">Home</a></li>
										<li><a href="Games.php">Games</a></li>
										<!--<li><a href="orderStatus.html" class="Button" >Order Status</a></li>-->
										<!-- بتبين بس لما نعمل ساين ان ، والساين ان بتختفي 	-->
										<li><a href="Cart%20page.php" >Cart</a></li>
										<li><a href="wishlist page.php" >Wishlist</a></li>
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


												<div class="Logincontainer">
													<input type="checkbox" id="flip">
													<div class="cover">
														<div class="front">
															<img src="images/1.jpg" alt="">
															<div class="text">
																<span class="text-1">Every new friend is a <br> new adventure</span>
																<span class="text-2">Let's get connected</span>
															</div>
														</div>
													</div>
													<div class="forms">
														<div class="form-content">
															<div class="login-form">
																<div class="title">Login</div>
																<form action="login page.php" method="post">
																	<div class="input-boxes">
																		<div class="input-box">
																			<i class="fas fa-envelope"></i>
																			<input type="text" placeholder="Enter your email" name="ELog" required>
																		</div>
																		<div class="input-box">
																			<i class="fas fa-lock"></i>
																			<input type="password" placeholder="Enter your password" name="passLog" required>
																		</div>
																		<div class="text"><a href="#">Forgot password?</a></div>
                                                                        <?php
                                                                        if (isset($_POST['LoginSubmit'])){
                                                                            if(isset($_SESSION['ismember'])) {
                                                                                if ($_SESSION['ismember'] == 0){
                                                                                    echo '<p style="color: red  " >Incorrect email or password</p>';
                                                                                }
                                                                            }
                                                                        }
                                                                        ?>

																		<div class="button input-box">
																			<input type="submit" name="LoginSubmit" value="Submit">
																		</div>
																		<div class="text sign-up-text">Don't have an account? <label for="flip">SignUp now</label></div>
																	</div>
																</form>
															</div>
															<div class="signup-form">
																<div class="title">Signup</div>
																<form action="login page.php" method="post">
																	<div class="input-boxes">
																		<div class="input-box">
																			<i class="fas fa-user"></i>
																			<input type="text" placeholder="Enter your name" name="UserName" required>
																		</div>
																		<div class="input-box">
																			<i class="fas fa-envelope"></i>
																			<input type="text" placeholder="Enter your email"  name="email" required>
																		</div>
																		<div class="input-box">
																			<i class="fas fa-lock"></i>
																			<input type="password" placeholder="Enter your password" name="password" required>
																		</div>


																		<div class="button input-box">
																			<input type="submit" name="SignupSubmit" value="submit">
																		</div>
																		<div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>

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
									  $("#slider4").<label for({
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
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>

	<script type="text/javascript">
		$(function() {
			$('.filtr-item div').Chocolat();
		});
	</script>
	<!-- //PopUp-Box-JavaScript -->
</body>	
</html>