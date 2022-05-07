<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<?php
session_start();

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
    <link rel="stylesheet" href="css/table.css">
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
                                            <form class="example" action="searchgames.php" method="post" style="margin:auto;max-width:800px">

                                                <input type="text" placeholder="Search.." name="search">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                                <select name="column">
                                                    <option value="Name">Name</option>
                                                    <option value="Rank">Rank</option>
                                                    <option value="Year">Year</option>
                                                    <option value="Genre">Genre</option>
                                                    <option value="Publisher">Publisher</option>
                                                    <option value="NA_Sales">Price</option>

                                                </select>
                                            </form>
                                            <!--												<h3>j</h3>-->
                                            <!--												<p>k</p>  &lt;!&ndash;hereeeeeeeeeeeeeeeeeeeeeeeeee&ndash;&gt;-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                            <script src="../../../../../Users/Dell/Downloads/AdvanceProjectt-master/software/js/responsiveslides.min.js"></script>
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

<div >
    <div >
        <div >
            <?php
            @$search = $_POST['search'];
            @$column = $_POST['column'];
            $conn = mysqli_connect("localhost", "root", "", "advance");
            if ($conn->connect_error){
                die("Connection failed: ". $conn->connect_error);
            }
            ?>
            <table class="rwd-table">
                <tr>
                    <th>Rank</th>
                    <th>Name</th>
                    <th>Platform</th>
                    <th>Year</th>
                    <th>Genre</th>
                    <th>Publisher</th>
                    <th>Price</th>
                    <th>EU_Sales</th>
                    <th>JP_Sales</th>
                    <th>Other_Sales</th>
                    <th>Global_Sales</th>
                    <th>image</th>

                </tr>
                <?php
                $sql = "select * from games where $column like '%$search%'" ;

                if($column == "Rank")
                    $sql = "select * from games where Rank = $search  " ;
                else if($column == "NA_Sales")
                  $sql = "select * from games where NA_Sales > ($search-10) and NA_Sales < ($search+10)  " ;
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc() ){
                        ?>
                        <tr> <td><?php echo $row["Rank"]; ?></td>
                            <td><?php echo $row["Name"]; ?></td>
                            <td><?php echo $row["Platform"]; ?></td>
                            <td><?php echo $row["Year"]; ?></td>
                            <td><?php echo $row["Genre"]; ?></td>
                            <td><?php echo $row["Publisher"]; ?></td>
                            <td><?php echo $row["NA_Sales"]; ?></td>
                            <td><?php echo $row["EU_Sales"]; ?></td>
                            <td><?php echo $row["JP_Sales"]; ?></td>
                            <td><?php echo $row["Other_Sales"]; ?></td>
                            <td><?php echo $row["Global_Sales"]; ?></td>

                            <td><?php

                                $filename= "images_game/".$row['Name'].".jpg";

                                if(file_exists($filename)){
                                    echo "<img style='object-fit: cover' id='big-image' src='images_game/".$row['Name'].".jpg"."' width='210' >";
                                }
                                else{
                                    echo "<img style='object-fit: cover' id='big-image'   src='images_game/icon.png' width='210' >";
                                    ?>
                                    <?php
                                }

                                ?></td>

                        </tr>
                        <?php
                    }}
                ?>
            </table>















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


<script src="../../../../../Users/Dell/Downloads/AdvanceProjectt-master/software/js/jarallax.js"></script>
<!-- <script src="js/SmoothScroll.min.js"></script> -->
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<script src="../../../../../Users/Dell/Downloads/AdvanceProjectt-master/software/js/responsiveslides.min.js"></script>
<script type="text/javascript" src="../../../../../Users/Dell/Downloads/AdvanceProjectt-master/software/js/move-top.js"></script>
<script type="text/javascript" src="../../../../../Users/Dell/Downloads/AdvanceProjectt-master/software/js/easing.js"></script>
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
<script src="../../../../../Users/Dell/Downloads/AdvanceProjectt-master/software/js/jquery.filterizr.js"></script>
<script src="../../../../../Users/Dell/Downloads/AdvanceProjectt-master/software/js/controls.js"></script>
<script type="text/javascript">
    $(function() {
        $('.filtr-container').filterizr();
    });
</script>
<!-- //Tabs-JavaScript -->
<!-- PopUp-Box-JavaScript -->
<script src="../../../../../Users/Dell/Downloads/AdvanceProjectt-master/software/js/jquery.chocolat.js"></script>
<!--		<script type="text/javascript">-->
<!--			$(function() {-->
<!--				$('.filtr-item a').Chocolat();-->
<!--			});-->
<!--		</script>-->

<!-- //PopUp-Box-JavaScript -->
</body>
</html>

