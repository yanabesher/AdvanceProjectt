
<?php



session_start();






if(isset($_SESSION['ISmem'])) {


    try {

        $dataPoints = array();
        $db = new mysqli('localhost', 'root', '', 'advance');
        $qryStr = "SELECT * FROM games WHERE `Year`='2009'  ";
        $res = $db->query($qryStr);
        $S = $res->num_rows;
        $dataPoints[] = array("label" => "2009", "y" => $S);
        $qryStr = "SELECT * FROM games WHERE `Year`='2008'  ";
        $res1 = $db->query($qryStr);
        $Sh = $res1->num_rows;
        $dataPoints[] = array("label" => "2008", "y" => $res->num_rows);
        $qryStr = "SELECT * FROM games WHERE `Year`='2010'  ";
        $res2 = $db->query($qryStr);
        $A = $res2->num_rows;
        $dataPoints[] = array("label" => "2010", "y" => $A);
        $qryStr = "SELECT * FROM games WHERE `Year`='2007'  ";
        $res3 = $db->query($qryStr);
        $P = $res3->num_rows;
        $dataPoints[] = array("label" => "2007", "y" => $P);
        $qryStr = "SELECT * FROM games WHERE `Year`='2011'  ";
        $res = $db->query($qryStr);
        $SI = $res->num_rows;
        $dataPoints[] = array("label" => "2011", "y" => $SI);
        $qryStr = "SELECT * FROM games WHERE `Year`='2006'  ";
        $res = $db->query($qryStr);
        $M = $res->num_rows;
        $dataPoints[] = array("label" => "2006", "y" => $M);
        $qryStr = "SELECT * FROM games WHERE `Year`='2005'  ";
        $res = $db->query($qryStr);
        $R = $res->num_rows;
        $dataPoints[] = array("label" => "2005", "y" => $R);
        $qryStr = "SELECT * FROM games WHERE `Year`='2002'  ";
        $res = $db->query($qryStr);
        $PU = $res->num_rows;
        $dataPoints[] = array("label" => "2002", "y" => $PU);
        $qryStr = "SELECT * FROM games WHERE `Year`='2003'  ";
        $res = $db->query($qryStr);
        $RAC = $res->num_rows;
        $dataPoints[] = array("label" => "2003", "y" => $RAC);
        $qryStr = "SELECT * FROM games WHERE `Year`='2004'  ";
        $res = $db->query($qryStr);
        $FI = $res->num_rows;
        $dataPoints[] = array("label" => "2004", "y" => $FI);
        $qryStr = "SELECT * FROM games WHERE `Year`='2012'  ";
        $res = $db->query($qryStr);
        $STR = $res->num_rows;
        $dataPoints[] = array("label" => "2012", "y" => $STR);
        $qryStr = "SELECT * FROM games WHERE `Year`='2015'  ";
        $res12 = $db->query($qryStr);
        $ADV = $res12->num_rows;
        $dataPoints[] = array("label" => "2015", "y" => $ADV);
        $db->commit();
        $db->close();
    } catch (Exception $e) {

    }


?>

<!doctype html>
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
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "light1", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Which year had the most game release?"
                },
                axisY:{
                    includeZero: true
                },
                data: [{
                    type: "column", //change type to bar, line, area, pie, etc
                    //indexLabel: "{y}", //Shows y value on all Data Points
                    indexLabelFontColor: "#5A5757",
                    indexLabelPlacement: "outside",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>

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
                    <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                    <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
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
                    <li><a href="index.php" class="active"><i class="lnr lnr-code"></i> <span>Home</span></a></li>

                    <li><a href="profile1.php" class=""><i class="lnr lnr-code"></i> <span>Profile</span></a></li>
                    <li><a href="addadmin.php" class=""><i class="lnr lnr-code"></i> <span>Add Admin</span></a></li>
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
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Weekly Overview</h3>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="weekly-summary text-right">

                                    <span class="number">                          <?php
                                            $db = new mysqli('localhost', 'root', '', 'advance');
                                            $qryStr = "SELECT * FROM cart   ";
                                            $res = $db->query($qryStr);
                                            $S = $res->num_rows;
                                            $sum=0;
for($i=0;$i<$res->num_rows;$i++) {

    $row = $res->fetch_object();
$sum=$sum+$row->GamePrice;
}
                                            ?>  <span class="number"> <?php echo $sum;

                                            $db->commit();

                                            $db->close();
                                            ?></span> <span class="percentage"><i class="fa fa-caret-up text-success"></i></span>
                                    <span class="info-label">Total Sales</span>
                                </div>
                            </div>
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-3">

                            </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div id="chartContainer" style="  height: 370px; width: 80%;"></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                            </div>
                            <div class="col-md-3">

                                <div class="metric">
                                    <span class="icon"><i class="fa fa-eye"></i></span>
                                    <p>
             </span>
                                      <?php  $db = new mysqli('localhost', 'root', '', 'advance');
                                        $qryStr = "SELECT * FROM member   ";
                                        $res = $db->query($qryStr);
                                        $S = $res->num_rows;echo $S;  ?> <span class="title">Users</span>
                                    </p>
                                </div>
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                    <p>
                                        <span class="number">                           <?php
                                            $db = new mysqli('localhost', 'root', '', 'advance');
                                            $qryStr = "SELECT * FROM cart   ";
                                            $res = $db->query($qryStr);
                                            $S = $res->num_rows;

                                            ?>
                                        <span class="number"> <?php echo $S ;

                                            $db->commit();

                                            $db->close();
                                            ?></span>
                                        <span class="title">Sales</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OVERVIEW -->
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">

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
<?php
}else{

    header('location:loginadmin.php');
}
    ?>