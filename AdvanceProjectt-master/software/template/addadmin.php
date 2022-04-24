

<?php


if (isset($_POST['add']) ) {

if( isset($_POST['pass'])&&isset($_POST['name'])
&&isset($_POST['email'])
&&isset($_POST['place'])
&& isset($_POST['phone'])){

$n=$_POST['name'];
  $p=  $_POST['pass'];
    $e=$_POST['email'];
   $pl= $_POST['place'];
   $ph= $_POST['phone'];
   $connect = mysqli_connect("localhost", "root", "", "advance");

    $file = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));


    try {
        $db = new mysqli('localhost', 'root', '', 'advance');

        $qryStr = " INSERT INTO `loginadmin` (`name`, `pass`,`email` ,`place`,`phone`, `image`) VALUES ('" . $n . "','" . $p . "' ,'" . $e . "'
       , '" . $pl . "','" . $ph . "','$file' ) ";
        $rs = $db->query($qryStr);
        $db->commit();
        $db->close();





    } catch (Exception $e) {

    }

}else{


$n=$_POST['name'];
  $p=  $_POST['pass'];
    $e=$_POST['email'];
   $pl= $_POST['place'];
   $ph= $_POST['phone'];
   $connect = mysqli_connect("localhost", "root", "", "advance");

    $file =lo_import('assets/img/apple-icon.png') ;


    try {
        $db = new mysqli('localhost', 'root', '', 'advance');

        $qryStr = " INSERT INTO `loginadmin` (`name`, `pass`,`email` ,`place`,`phone`, `image`) VALUES ('" . $n . "','" . $p . "' ,'" . $e . "'
       , '" . $pl . "','" . $ph . "','$file' ) ";
        $rs = $db->query($qryStr);
        $db->commit();
        $db->close();





    } catch (Exception $e) {

    }
}

}




?><!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<style>
    body {
        background-color: whitesmoke;
       }
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

.col1{
background-color: lightcyan;
}
    .input-field{
        width: 100%;
        padding: 10px 0;
        margin: 2px 0;
        border-left: 0;
        color: blue;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid white;
        outline: none;
        background: transparent;}
    .submit-btn {
        width: 30%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
font-size: x-large;
        color: blue;
        margin: auto;
        background: linear-gradient(to right, lightcyan, white);
       position: absolute;
        top: 450px;
        left: 400px;
        border: 0;
        outline: none;
        border-radius: 30px;
    }
    .mm{
        position: absolute;
        top: 10px;
        left:300px;
    }
</style>
<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
            </div>

            <form class="navbar-form navbar-left">
                <div class="input-group">

                    <form action="test4.php" method="post">


                        </select>

                        <input type="text" value="" class="form-control" name="search" placeholder="Search ...">


                        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
                    </form>

                </div>
            </form>

            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">


                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                        <ul class="dropdown-menu">

                            <li><a href="profile1.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>


                            <li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>

                    <li><a href="profile1.php" class=""><i class="lnr lnr-code"></i> <span>Profile</span></a></li>
                    <li><a href="addadmin.php" class="active"><i class="lnr lnr-code"></i> <span>Add Admin</span></a></li>
                    <li><a href="chart.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
                    <li>
                        <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Games</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages" class="collapse ">
                            <ul class="nav">
                                <li><a href="sport.php" class="">Sports</a></li>
                                <li><a href="platt.php" class="">Platform</a></li>
                                <li><a href="racing.php" class="">Racing</a></li>
                                <li><a href="role.php" class="">Role-Playing</a></li>
                                <li><a href="puzzle.php" class="">Puzzle</a></li>
                                <li><a href="misc.php" class="">Misc</a></li>
                                <li><a href="Shooter.php" class="">Shooter</a></li>
                                <li><a href="Simulation.php" class="">Simulation</a></li>

                                <li><a href="Fighting.php" class="">Fighting</a></li>
                                <li><a href="Adventure.php" class="">Adventure</a></li>

                                <li><a href="Strategy.php" class="">Strategy</a></li>
                                <li><a href="Action.php" class="">Action</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
                <div  class="col1">
                    <div >
                        <form  action="addadmin.php" class="input-group" method="post" enctype="multipart/form-data">



                    </div>

                    <input type="text" class="input-field" placeholder="  Name" name="name" required>
                    <input type="password" class="input-field" placeholder="  password" name="pass" required>
                    <input type="text" class="input-field" placeholder="   email" name="email" required>

                    <input type="text" class="input-field" placeholder="   place" name="place" required>
                    <input type="text" class="input-field" placeholder="   phone" name="phone" required>

                    <input type="file" class="input-field" name="image1"  id="image1">


                    <button type="submit" name="add"  class="submit-btn">ADD</button>






                    </form>

                    </div>
                    <div class="col-md-5">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
        <div class="container-fluid">
            <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
        </div>
    </footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/vendor/chartist/js/chartist.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>
<script>
    $(function() {
        var data, options;

        // headline charts
        data = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [
                [23, 29, 24, 40, 25, 24, 35],
                [14, 25, 18, 34, 29, 38, 44],
            ]
        };

        options = {
            height: 300,
            showArea: true,
            showLine: false,
            showPoint: false,
            fullWidth: true,
            axisX: {
                showGrid: false
            },
            lineSmooth: false,
        };

        new Chartist.Line('#headline-chart', data, options);


        // visits trend charts
        data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            series: [{
                name: 'series-real',
                data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
            }, {
                name: 'series-projection',
                data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
            }]
        };

        options = {
            fullWidth: true,
            lineSmooth: false,
            height: "270px",
            low: 0,
            high: 'auto',
            series: {
                'series-projection': {
                    showArea: true,
                    showPoint: false,
                    showLine: false
                },
            },
            axisX: {
                showGrid: false,

            },
            axisY: {
                showGrid: false,
                onlyInteger: true,
                offset: 0,
            },
            chartPadding: {
                left: 20,
                right: 20
            }
        };

        new Chartist.Line('#visits-trends-chart', data, options);


        // visits chart
        data = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [
                [6384, 6342, 5437, 2764, 3958, 5068, 7654]
            ]
        };

        options = {
            height: 300,
            axisX: {
                showGrid: false
            },
        };

        new Chartist.Bar('#visits-chart', data, options);


        // real-time pie chart
        var sysLoad = $('#system-load').easyPieChart({
            size: 130,
            barColor: function(percent) {
                return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
            },
            trackColor: 'rgba(245, 245, 245, 0.8)',
            scaleColor: false,
            lineWidth: 5,
            lineCap: "square",
            animate: 800
        });

        var updateInterval = 3000; // in milliseconds

        setInterval(function() {
            var randomVal;
            randomVal = getRandomInt(0, 100);

            sysLoad.data('easyPieChart').update(randomVal);
            sysLoad.find('.percent').text(randomVal);
        }, updateInterval);

        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

    });
</script>
</body>

</html>
