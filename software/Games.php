<?php

session_start();

require_once ('./php/component.php');

$database = mysqli_connect("localhost", "root", "", "advance");
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'Games.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>
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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="stylecart.css">
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
                        <div class="navbar navbar-expand-lg  " >
                            <nav>
                                <ul class=" navbar-nav">
                                    <li > <a href="Games.php">
                                            <i class="fas fa-shopping-basket"></i> Games
                                        </a></li>
                                    <li><a href="home page.php">Home</a></li>
                                    <li><a href="login page.php" class="Button" >Sign in / Sign up</a></li>
                                    <!--<li><a href="orderStatus.html" class="Button" >Order Status</a></li>-->
                                    <!-- بتبين بس لما نعمل ساين ان ، والساين ان بتختفي 	-->
                                    <li><a href="Cart%20page.php" >Cart</a></li>
                                    <li><a href="wishlist page.php" >Wishlist</a></li>
                                    <li>  <a href="cart.php" class="nav-item nav-link active">
                                            <i class="fas fa-shopping-cart"></i> Cart
                                            <?php

                                            if (isset($_SESSION['cart'])){
                                                $count = count($_SESSION['cart']);
                                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                            }else{
                                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                            }

                                            ?>
                                        </a></li>
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
                                            <form class="example" action="searchgames.php" method="post" style="margin:auto;max-width:800px">

                                                <input type="text" placeholder="Search.." name="search">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                                <select name="column">
                                                    <option value="Name">Name</option>
                                                    <option value="Rank">Rank</option>
                                                    <option value="Year">Year</option>
                                                    <option value="Genre">Genre</option>
                                                    <option value="Publisher">Publisher</option>
                                                    <option value="NA_Sales">NA_Sales</option>
                                                    <option value="EU_Sales">EU_Sales</option>
                                                    <option value="JP_Sales">JP_Sales</option>
                                                    <option value="Global_Sales">Global_Sales</option>

                                                </select>
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
        <div class="filtr-container w3layouts agileits" >
            <div class="row text-center " >


                <?php
                $result = $database->query("select * from games where Genre ='Action' and Rank>15 and Rank<86 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="1" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>

                <?php
                $result = $database->query("select * from games where Genre ='Sports' and Rank>1 and Rank<119 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="2" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>




                    <?php
                    $result = $database->query("select * from games where Genre ='Puzzle' and Rank>5 and Rank<91 ");
                    while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                            <div class="filtr-item w3layouts agileits portfolio-t" data-category="3" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                <?php
                if(file_exists($nimage)){

                    component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                }
                else {            $nimage="images_game/icon.png";
                    component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                }
                ?>
            </div>
            <?php
            }
            ?>



                <?php
                $result = $database->query("select * from games where Genre ='Strategy' and Rank>165 and Rank<206 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="4" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>



                <?php
                $result = $database->query("select * from games where Genre ='Racing' and Rank>2 and Rank<44 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="5" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>





                <?php
                $result = $database->query("select * from games where Genre ='Adventure' and Rank>417 and Rank<419 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="6" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>



                <?php
                $result = $database->query("select * from games where Genre ='Fighting' and Rank>104 and Rank<107 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="7" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>



                <?php
                $result = $database->query("select * from games where Genre ='Platform' and Rank>1 and Rank<89 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="8" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>



                <?php
                $result = $database->query("select * from games where Genre ='Shooter' and Rank>79 and Rank<87 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="9" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>



                <?php
                $result = $database->query("select * from games where Genre ='Misc' and Rank>7 and Rank<114 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="10" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>



                <?php
                $result = $database->query("select * from games where Genre ='Simulation' and Rank>10 and Rank<85 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="11" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>



                <?php
                $result = $database->query("select * from games where Genre ='Shooter' and Rank>79 and Rank<87 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="12" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>



                <?php
                $result = $database->query("select * from games where Genre ='Role-Playing' and Rank>4 and Rank<22 ");
                while ($row = mysqli_fetch_assoc($result)){
                    $nimage="images_game/".$row['Name'].".jpg";
                    ?>
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="13" data-sort="Busy streets" style="padding: 5px ; width: 25%">
                        <?php
                        if(file_exists($nimage)){

                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);
                        }
                        else {            $nimage="images_game/icon.png";
                            component($row['Name'], $row['NA_Sales'], $nimage, $row['Rank'],$row['Platform']);

                        }
                        ?>
                    </div>
                    <?php
                }
                ?>






            </div>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>