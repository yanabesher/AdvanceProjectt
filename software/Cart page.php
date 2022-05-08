<?php

session_start();
require_once ('php.php');
@$dp = new mysqli('localhost', 'root', '', 'advance');
$emm=$_SESSION['E'];

if (isset($_POST['remove'])){
    $rank=$_POST['Rank'];
    $qry="delete from wishlist where Rank='$rank' and Email='$emm' and Category='cart'";
    $res=$dp->query($qry);
    header("location:cart page.php");
}
if(isset($_POST['move'])){
    $rank=$_POST['Rank'];
    $qry="UPDATE wishlist SET Category = 'wishList' WHERE  Rank='$rank' and Email='$emm'";
    $res=$dp->query($qry);
    header("location:cart page.php");
}
if(isset($_POST['PlaceOrder'])){
    $t="<div  style=\" display: block;\"  class=\"row\" id=\"myForm\">
		<div class=\"col-75\">
			<div class=\"containerr\">
				<form action=\"Cart%20page.php\" method=\"post\">

					<div class=\"row\">
						<div class=\"col-50\">
							<h3>Billing Address</h3>
							<label for=\"fname\"><i class=\"fa fa-user\"></i> Full Name</label>
							<input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"John M. Doe\">
							<label for=\"email\"><i class=\"fa fa-envelope\"></i> Email</label>
							<input type=\"text\" id=\"email\" name=\"email\" placeholder=\"john@example.com\">
							<label for=\"adr\"><i class=\"fa fa-address-card-o\"></i> Address</label>
							<input type=\"text\" id=\"adr\" name=\"address\" placeholder=\"542 W. 15th Street\">
							<label for=\"city\"><i class=\"fa fa-institution\"></i> City</label>
							<input type=\"text\" id=\"city\" name=\"city\" placeholder=\"New York\">
							<label for=\"Phone\"><i class=\"fa fa-phone\"></i> Phone Number</label>
							<input type=\"text\" id=\"Phone\" name=\"Phone\" placeholder=\"0599544937\">
<!--							<input type=\"button\" value=\"Cancel\" class=\"btn\" onclick=\"closeForm()\">-->
							<input type=\"submit\" value=\"Checkout\" name='Checkout' class=\"btn\">
							<input type=\"submit\" value=\"Cancel\" name='Cancel' class=\"btn\">
						</div>
					</div>


				</form>
			</div>
		</div>

	</div>";
    echo $t;

}

if(isset($_POST['Checkout'])){
    if(isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['Phone'])){
        $name=$_POST['firstname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $phone=$_POST['Phone'];
        $date= date("Y/m/d");
        $qry="INSERT INTO personalinfo values ('".$name."','".$email."','".$address."','".$city."','".$phone."')";
        $res=$dp->query($qry);
        $qry="select * from wishlist where Email='$email' and Category='cart'";
        $res=$dp->query($qry);
        $name="";
        for ($i=0;$i <$res->num_rows;$i++)
        { $row= $res->fetch_array();
            $rank=$row['Rank'];
            $gameName=$row['GameName'];
            $name=$name .$gameName;
            $gamePrice=$row['GamePrice'];
            $rank=$row['Rank'];
            $qry="INSERT INTO orders values ('".$email."','".$gameName."','".$gamePrice."','".$rank."','".$date."')";
            $res2=$dp->query($qry);
        }
        $qry="delete from wishlist where Email='$email' and Category='cart' ";
        $res=$dp->query($qry);

        //send email
        $subject = "Order from Video Games Store";
        $txt =  "You order from Video Games Store : ".$name." \r\n"."Your total price :".$_SESSION['price'];
        //mail( to, subject, message, headers, parameters );
        mail( $email, $subject, $txt );
        header("location:cart page.php");
    }

}

if(isset($_POST['PlaceOrder'])){
    $t="<div  style=\" display: none;\"  class=\"row\" id=\"myForm\">
		<div class=\"col-75\">
			<div class=\"containerr\">
				<form action=\"Cart%20page.php\" method=\"post\">

					<div class=\"row\">
						<div class=\"col-50\">
							<h3>Billing Address</h3>
							<label for=\"fname\"><i class=\"fa fa-user\"></i> Full Name</label>
							<input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"John M. Doe\" required>
							<label for=\"email\"><i class=\"fa fa-envelope\"></i> Email</label>
							<input type=\"text\" id=\"email\" name=\"email\" placeholder=\"john@example.com\">
							<label for=\"adr\"><i class=\"fa fa-address-card-o\"></i> Address</label>
							<input type=\"text\" id=\"adr\" name=\"address\" placeholder=\"542 W. 15th Street\">
							<label for=\"city\"><i class=\"fa fa-institution\"></i> City</label>
							<input type=\"text\" id=\"city\" name=\"city\" placeholder=\"New York\">
							<label for=\"Phone\"><i class=\"fa fa-phone\"></i> Phone Number</label>
							<input type=\"text\" id=\"Phone\" name=\"Phone\" placeholder=\"0599544937\">
<!--							<input type=\"button\" value=\"Cancel\" class=\"btn\" onclick=\"closeForm()\">-->
							<input type=\"submit\" value=\"Checkout\" name='Checkout' class=\"btn\">
							<input type=\"submit\" value=\"Cancel\" name='Cancel' class=\"btn\">
						</div>
					</div>


				</form>
			</div>
		</div>

	</div>";
    echo $t;

}



?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
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
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/style3.css" type="text/css" media="all" />



    <style>

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
            width: 35%;
            position: fixed;
            bottom: 20%;
            right: 35%;
            z-index: 9;
            border: 2px solid white;
            border-radius: 12px;

            background-color: #f1f4f5;
        }
        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .containerr {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
            width: 100%;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .btn {
            background-color: #FF9800;

            border-color: #f26522;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 49.5%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #ec9e2c;
        }

        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }
        }
    </style>



</head>
<body>
<!-- banner -->
<div class="banner">
    <div class="agileinfo-dot">
        <div class="agileits-logo">
            <h1><a href="home%20page.html">Video Games  <span>Store</span></a></h1>
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
                                    <li class="active"><a href="Cart page.php" class="Button" >Cart</a></li>
                                    <li><a href="home page.php">Home</a></li>
                                    <li><a href="login page.php" class="Button" >Log out</a></li>
                                    <li><a href="Games.php">Games</a></li>
                                    <!--<li><a href="orderStatus.html" class="Button" >Order Status</a></li>-->
                                    <!-- بتبين بس لما نعمل ساين ان ، والساين ان بتختفي 	-->
                                    <li><a href="wishlist page.php" >Wishlist</a></li>
                                    <li class="active"><a href="orderStatus.php" class="Button" >Order Status</a></li>

                                </ul>
                            </nav>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div>

        <div class="wrapper">

            <div class="wrapper_content">
                <div class="header_title">
                    <div class="title" style="color: white;">
                        MY SHOPPING CART :
                    </div>
                    <div class="amount">
                        <?php
                        $email=$_SESSION['E'];
                        $qry="select * from wishlist where Email='$email' and Category='cart'";
                        $res=$dp->query($qry);
                        $num=$res->num_rows;
                        ?>
                        <b style="color: white;">( <?php echo $num ?>) Games</b> <!-- Number of Games in cart in dataBase  -->
                    </div>
                </div>
                <hr>
                <?php
                for ($i=0;$i <$res->num_rows;$i++)
                { $row= $res->fetch_array();
                    $rank=$row['Rank'];
                    $page="wishlist";
                    $action="Cart%20page.php";
                    $productimg="images_game/".$row['GameName'].".jpg";
                    if(file_exists($productimg)){
                        Elements($row['GameName'],$row['GamePrice'],$rank,$page,$action,$productimg);
                    }
                    else{
                        $productimg="images_game/icon.png";
                        Elements($row['GameName'],$row['GamePrice'],$rank,$page,$action,$productimg);

                    }
                }
                ?>

            </div>

            <div class="wrapper_amount">
                <div class="header_title">
                    <div class="title" style="color: white;">
                        TOTAL PRICE DETAILS:
                    </div>
                    <div class="amount" style="color: white;">
                        <b>Order + Delivery</b>
                    </div>
                </div>
                <div class="price_details">
                    <div class="item">
                        <p>Order Total :</p>
                        <p><?php
                            $qry="select GamePrice from wishlist where Email='$email' and Category='cart'";
                            $res=$dp->query($qry);
                            $price=0;
                            for ($i=0;$i <$res->num_rows;$i++) {
                                $row = $res->fetch_array();
                                $price=$price+$row['GamePrice'];

                            }
                            echo  "$".$price;
                            $_SESSION['price'] = $price;
                            ?></p>
                    </div>
                    <div class="item">
                        <p>Delivery Charges :</p>
                        <p><span style="text-decoration: line-through;"></span>$5 </p>
                        <!--                    <span class="green" style="color: #03a685;">FREE</span>-->
                    </div>
                    <div class="total">
                        <p>Total :</p>
                        <p><?php
                            $price=$price+5;
                            echo  "$".$price;
                            ?></p>
                    </div>
                </div>
                <div class="checkout">
                    <!--						<a onclick="openForm()" role="button" class="checkout_btn">Place Order</a>-->
                    <form action="Cart%20page.php" method="post">

                        <button type="submit" style="border: none; color: #efefef; background-color:#FF9800 ; padding: 10px 15px ;border-radius: 5px " name="PlaceOrder" class="checkout_btn" >Place Order</button>

                    </form>

                </div>

            </div>
        </div>


    </div>
</div>
<!-- //banner -->

<!--	<div  style=" display: none;"  class="row" id="myForm">-->
<!--		<div class="col-75">-->
<!--			<div class="containerr">-->
<!--				<form action="/action_page.php">-->
<!---->
<!--					<div class="row">-->
<!--						<div class="col-50">-->
<!--							<h3>Billing Address</h3>-->
<!--							<label for="fname"><i class="fa fa-user"></i> Full Name</label>-->
<!--							<input type="text" id="fname" name="firstname" placeholder="John M. Doe">-->
<!--							<label for="email"><i class="fa fa-envelope"></i> Email</label>-->
<!--							<input type="text" id="email" name="email" placeholder="john@example.com">-->
<!--							<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>-->
<!--							<input type="text" id="adr" name="address" placeholder="542 W. 15th Street">-->
<!--							<label for="city"><i class="fa fa-institution"></i> City</label>-->
<!--							<input type="text" id="city" name="city" placeholder="New York">-->
<!--							<label for="Phone"><i class="fa fa-phone"></i> Phone Number</label>-->
<!--							<input type="text" id="Phone" name="Phone" placeholder="0599544937">-->
<!--<!--							<input type="button" value="Cancel" class="btn" onclick="closeForm()">-->-->
<!--							<input type="submit" value="Checkout" class="btn">-->
<!--						</div>-->
<!--					</div>-->
<!---->
<!---->
<!--				</form>-->
<!--			</div>-->
<!--		</div>-->
<!---->
<!--	</div>-->

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>


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