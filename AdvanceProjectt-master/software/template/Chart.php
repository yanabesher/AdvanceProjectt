
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

                <?php





                try {

                    $dataPoints = array();
                    $db = new mysqli('localhost', 'root', '', 'advance');
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Sports'  ";
                    $res = $db->query($qryStr);
                    $S=$res->num_rows;
                    $dataPoints[] = array("label" => "Sports", "y" => $S);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Shooter'  ";
                    $res1 = $db->query($qryStr);
                    $Sh=$res1->num_rows;
                    $dataPoints[] = array("label" => "Shooter", "y" => $res->num_rows);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Action'  ";
                    $res2 = $db->query($qryStr);
                    $A=$res2->num_rows;
                    $dataPoints[] = array("label" => "Action", "y" => $A);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Platform'  ";
                    $res3 = $db->query($qryStr);
                    $P=$res3->num_rows;
                    $dataPoints[] = array("label" => "Platform", "y" => $P);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Simulation'  ";
                    $res = $db->query($qryStr);
                    $SI=$res->num_rows;
                    $dataPoints[] = array("label" => "Simulation", "y" => $SI);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Misc'  ";
                    $res = $db->query($qryStr);
                    $M=$res->num_rows;
                    $dataPoints[] = array("label" => "Misc", "y" => $M);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Role-Playing'  ";
                    $res = $db->query($qryStr);
                    $R=$res->num_rows;
                    $dataPoints[] = array("label" => "Role-Playing", "y" => $R);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Puzzle'  ";
                    $res = $db->query($qryStr);
                    $PU=$res->num_rows;
                    $dataPoints[] = array("label" => "Puzzle", "y" => $PU);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Racing'  ";
                    $res = $db->query($qryStr);
                    $RAC=$res->num_rows;
                    $dataPoints[] = array("label" => "Racing", "y" => $RAC);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Fighting'  ";
                    $res = $db->query($qryStr);
                    $FI=$res->num_rows;
                    $dataPoints[] = array("label" => "Fighting", "y" => $FI);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Strategy'  ";
                    $res = $db->query($qryStr);
                    $STR=$res->num_rows;
                    $dataPoints[] = array("label" => "Strategy", "y" => $STR);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Adventure'  ";
                    $res12 = $db->query($qryStr);
                    $ADV=$res12->num_rows;
                    $dataPoints[] = array("label" => "Adventure", "y" => $ADV);
                    $db->commit();
                    $db->close();
                }catch(Exception $e){

                }


                ?>


                animationEnabled: true,
                //theme: "light2",
                title:{
                    text: "1.What genre games have been made the most."
                },
                axisX:{
                    crosshair: {
                        enabled: true,
                        snapToDataPoint: true
                    }
                },
                axisY:{
                    title: "Count",
                    includeZero: true,
                    crosshair: {
                        enabled: true,
                        snapToDataPoint: true
                    }
                },
                toolTip:{
                    enabled: false
                },
                data: [{
                    type: "area",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
            var chart = new CanvasJS.Chart("chartContainer1", {

                <?php





                try {

                    $dataPoints = array();
                    $db = new mysqli('localhost', 'root', '', 'advance');
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Sports' and   `Year`='2009'";
                    $res = $db->query($qryStr);
                    $S=$res->num_rows;
                    $dataPoints[] = array("label" => "S", "y" => $S);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Shooter' and   `Year`='2009' ";
                    $res1 = $db->query($qryStr);
                    $Sh=$res1->num_rows;
                    $dataPoints[] = array("label" => "Shooter", "y" => $res->num_rows);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Action'  and   `Year`='2009'";
                    $res2 = $db->query($qryStr);
                    $A=$res2->num_rows;
                    $dataPoints[] = array("label" => "Action", "y" => $A);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Platform' and   `Year`='2009' ";
                    $res3 = $db->query($qryStr);
                    $P=$res3->num_rows;
                    $dataPoints[] = array("label" => "Platform", "y" => $P);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Simulation' and   `Year`='2009' ";
                    $res = $db->query($qryStr);
                    $SI=$res->num_rows;
                    $dataPoints[] = array("label" => "Simulation", "y" => $SI);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Misc' and   `Year`='2009' ";
                    $res = $db->query($qryStr);
                    $M=$res->num_rows;
                    $dataPoints[] = array("label" => "Misc", "y" => $M);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Role-Playing' and   `Year`='2009' ";
                    $res = $db->query($qryStr);
                    $R=$res->num_rows;
                    $dataPoints[] = array("label" => "Role-Playing", "y" => $R);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Puzzle' and   `Year`='2009' ";
                    $res = $db->query($qryStr);
                    $PU=$res->num_rows;
                    $dataPoints[] = array("label" => "Puzzle", "y" => $PU);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Racing'  and   `Year`='2009'";
                    $res = $db->query($qryStr);
                    $RAC=$res->num_rows;
                    $dataPoints[] = array("label" => "Racing", "y" => $RAC);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Fighting'  and   `Year`='2009'";
                    $res = $db->query($qryStr);
                    $FI=$res->num_rows;
                    $dataPoints[] = array("label" => "Fighting", "y" => $FI);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Strategy'  and   `Year`='2009'";
                    $res = $db->query($qryStr);
                    $STR=$res->num_rows;
                    $dataPoints[] = array("label" => "Strategy", "y" => $STR);
                    $qryStr = "SELECT * FROM games WHERE `Genre`='Adventure'  and   `Year`='2009'";
                    $res12 = $db->query($qryStr);
                    $ADV=$res12->num_rows;
                    $dataPoints[] = array("label" => "Adventure", "y" => $ADV);
                    $db->commit();
                    $db->close();
                }catch(Exception $e){

                }


                ?>

                animationEnabled: true,
                exportEnabled: true,
                title:{
                    text: "2.Top year games release by genre"
                },
                subtitles: [{

                }],
                data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    yValueFormatString: "฿#,##0",
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
                    <li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>

                    <li><a href="profile1.php" class=""><i class="lnr lnr-code"></i> <span>Profile</span></a></li>
                    <li><a href="addadmin.php" class=""><i class="lnr lnr-code"></i> <span>Add Admin</span></a></li>
                    <li><a href="chart.php" class="active"><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>

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
                        <div class="panel" >
                            <div class="panel-heading" style="width: 660px ;height: 500px">


                            <div class="panel-body">
                                <div id="chartContainer" style=" position:absolute; height: 370px; width: 80%;"></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                            </div>
                        </div></div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading" style="width: 660px ;height: 500px">
                            <div class="panel-body">
                                <div id="chartContainer1" style=" position:absolute; height: 370px; width: 80%;"></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                            </div>
                        </div>
                    </div></div>
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

</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/vendor/chartist/js/chartist.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>




</body>

</html>
