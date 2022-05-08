<?php

session_start();

?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orders Page</title>
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

    <link rel="stylesheet" href="css/style3.css" type="text/css" media="all" />

    <style>
        * {
            font-family: Helvetica Neue, Arial, sans-serif;
        }



        h1, table {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto 5rem;
        }

        th, td {
            padding: 1.5rem;
            font-size: 1.3rem; }

        tr {
            background: hsl(50, 50%, 80%);
        }

        tr, td { transition: .4s ease-in; }

        tr:first-child {
            background-color: #FF9800;
            border-color: #f26522;
        }

        tr:nth-child(even) { background: hsla(50, 50%, 80%, 0.7); }

        td:empty {background: hsla(50, 25%, 60%, 0.7); }

        tr:hover:not(#firstrow), tr:hover td:empty {background: lightgoldenrodyellow; pointer-events: visible;}
        tr:hover:not(#firstrow) { transform: scale(1.2); font-weight: 700; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);}


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
                                    <li class="active"><a href="orderStatus.php" class="Button" >Order Status</a></li>
                                    <li><a href="Cart page.php" class="Button" >Cart</a></li>
                                    <li><a href="home page.php">Home</a></li>
                                    <li><a href="login page.php" class="Button" >Log out</a></li>
                                    <li><a href="Games.php">Games</a></li>
                                    <!--<li><a href="orderStatus.html" class="Button" >Order Status</a></li>-->
                                    <!-- بتبين بس لما نعمل ساين ان ، والساين ان بتختفي 	-->
                                    <li><a href="wishlist page.php" >Wishlist</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div>

        <div style="margin-top: 100px">
            <h1 style="color : White;">Order Status </h1>

            <table id="racetimes">
                <tr id="firstrow"><th>Game Name </th><th>Price</th><th>Date of order</th><th>Is it Received</th></tr>
                <?php
                @$dp=new mysqli('localhost','root','','advance');
                $email=$_SESSION['E'];
                $qry="select * from orders where  Email='$email' ";
                $res=$dp->query($qry);

                for ($i=0;$i <$res->num_rows;$i++)
                { $row= $res->fetch_array();
                    $gameName=$row['GameName'];
                    $gamePrice=$row['GamePrice'];
                    $date=$row['date'];
                    echo "<tr><td> $gameName </td><td> $gamePrice </td><td> $date</td><td> -- </td></tr>";
                }


                ?>
                <!--                <tr><td> HJKK </td><td> 10 </td><td> 15-3-2022</td><td> -- </td></tr>-->
                <!--                <tr><td>   </td><td>   </td><td>   </td><td>  </td></tr>-->
                <!--                <tr><td>   </td><td>   </td><td>  </td><td>  </td></tr>-->
                <!--                <tr><td>   </td><td>    </td><td>   </td><td>  </td></tr>-->
                <!--                <tr><td>   </td><td>   </td><td>  </td><td>  </td></tr>-->
                <!--                <tr><td>   </td><td>   </td><td>   </td><td>   </td></tr>-->
                <!--                <tr><td>  </td><td>   </td><td>    </td><td>    </td></tr>-->
            </table>



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