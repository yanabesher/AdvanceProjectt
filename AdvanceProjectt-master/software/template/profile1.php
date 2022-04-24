
<script>
    window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {

            <?php



            try {

                $dataPoints = array();

                $db = new mysqli('localhost', 'root', '', 'advance');
                $qryStr = "SELECT * FROM games WHERE `Year`='2004'  ";
                $res = $db->query($qryStr);

                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $PU=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2004", "y" => $PU);

                $qryStr = "SELECT * FROM games WHERE `Year`='2005'  ";
                $res = $db->query($qryStr);
                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $RAC=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2005", "y" => $RAC);
                $qryStr = "SELECT * FROM games WHERE `Year`='2006'  ";
                $res = $db->query($qryStr);
                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $FI=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2006", "y" => $FI);
                $qryStr = "SELECT * FROM games WHERE `Year`='2007'  ";
                $res = $db->query($qryStr);
                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $STR=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2007", "y" => $STR);
                $qryStr = "SELECT * FROM games WHERE `Year`='2008'  ";
                $res = $db->query($qryStr);
                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $STR=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2008", "y" => $STR);
                $qryStr = "SELECT * FROM games WHERE `Year`='2009'  ";
                $res = $db->query($qryStr);

                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $PU=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2009", "y" => $PU);
                $qryStr = "SELECT * FROM games WHERE `Year`='2010'  ";
                $res = $db->query($qryStr);
                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $STR=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2010", "y" => $STR);
                $qryStr = "SELECT * FROM games WHERE `Year`='2011'  ";
                $res = $db->query($qryStr);
                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $STR=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2011", "y" => $STR);

                $qryStr = "SELECT * FROM games WHERE `Year`='2012'  ";
                $res = $db->query($qryStr);
                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $STR=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2012", "y" => $STR);
                $qryStr = "SELECT * FROM games WHERE `Year`='2013'  ";
                $res = $db->query($qryStr);
                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $STR=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2013", "y" => $STR);
                $qryStr = "SELECT * FROM games WHERE `Year`='2014'  ";
                $res = $db->query($qryStr);
                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $STR=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2014", "y" => $STR);
                $qryStr = "SELECT * FROM games WHERE `Year`='2015'  ";
                $res = $db->query($qryStr);
                $sum=0;
                for($i=0;$i<$res->num_rows;$i++) {

                    $row = $res->fetch_object();
                    $sum=$sum+$row->NA_Sales;
                }
                $STR=$sum/$res->num_rows;
                $dataPoints[] = array("label" => "2015", "y" => $STR);

                $db->commit();
                $db->close();
            } catch (Exception $e) {

            }







            ?>


                animationEnabled: true,
                exportEnabled: true,
                theme: "light1", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "NA_Sales"
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
<?php
session_start();


if (isset($_POST['up'])) {

    if(is_uploaded_file($_FILES['image1']['tmp_name']) ) {

        $file = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
        try {
            $db = new mysqli('localhost', 'root', '', 'advance');
            $qryStr ="UPDATE `loginadmin` SET  `image`= '$file' WHERE `name`='" . $_SESSION['u'] . "' ";

            $rs = $db->query($qryStr);
            $db->commit();
            $db->close();

        } catch (Exception $e) {

        }

    }
    if(isset($_POST['username']) &&  $_POST['username']!='') {
        $user = $_POST['username'];
        $se=$_SESSION['u'];
        try {
            $db = new mysqli('localhost', 'root', '', 'advance');
            $qryStr = "UPDATE `loginadmin` SET  `name`='$user'  WHERE `name`='" . $se . "'";
            $_SESSION['u']=$user;
            $rs = $db->query($qryStr);
            $db->commit();
            $db->close();

        } catch (Exception $e) {

        }

    }


    if(isset($_POST['place'])     &&  $_POST['place']!='') {
        $place= $_POST['place'];

        try {
            $db = new mysqli('localhost', 'root', '', 'advance');
            $qryStr = "UPDATE `loginadmin` SET  `place`='$place'  WHERE `name`='" .  $_SESSION['u'] . "'";

            $rs = $db->query($qryStr);
            $db->commit();
            $db->close();

        } catch (Exception $e) {

        }

    }


    if(isset($_POST['phone'])&&  $_POST['phone']!='') {
        $phone= $_POST['phone'];

        try {
            $db = new mysqli('localhost', 'root', '', 'advance');
            $qryStr = "UPDATE `loginadmin` SET  `phone`='$phone'  WHERE `name`='" .  $_SESSION['u'] . "'";

            $rs = $db->query($qryStr);
            $db->commit();
            $db->close();

        } catch (Exception $e) {

        }

    }


    if(isset($_POST['email'])&&  $_POST['email']!='') {
        $email= $_POST['email'];

        try {
            $db = new mysqli('localhost', 'root', '', 'advance');
            $qryStr = "UPDATE `loginadmin` SET  `email`='$email'  WHERE `name`='" .  $_SESSION['u'] . "'";

            $rs = $db->query($qryStr);
            $db->commit();
            $db->close();

        } catch (Exception $e) {

        }

    }


    if(isset($_POST['pass'])&&  $_POST['pass']!='') {
        $pass= $_POST['pass'];

        try {
            $db = new mysqli('localhost', 'root', '', 'advance');
            $qryStr = "UPDATE `loginadmin` SET  `pass`='$pass'  WHERE `name`='" .  $_SESSION['u'] . "'";

            $rs = $db->query($qryStr);
            $db->commit();
            $db->close();

        } catch (Exception $e) {

        }

    }


//    $phone=$_POST['phone'];
//    $place=$_POST['place'];
//    $pass=$_POST['pass'];
//    $email=$_POST['email'];

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

                    <li><a href="profile1.php" class="active"><i class="lnr lnr-code"></i> <span>Profile</span></a></li>
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

            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-4">
                                        <div class="card card-user">

                                            <div class="card-image" >
                                                <?php
                                                $db = new mysqli('localhost', 'root', '', 'advance');
                                                $qryStr = "select * from loginadmin WHERE `name`='" .  $_SESSION['u'] . "'";


                                                $rs = $db->query($qryStr);
                                                $row = $rs->fetch_object();
if( $row->image!=""){
                                                ?>

                                               <?php echo"  <img style='border-radius: 50% ; border:2px red solid;  margin-left: 120px;' class='avatar border-gray' src='data:image/jpeg;base64,".base64_encode( $row->image)."'  height='150px' width=45%> ";?> <?php

}else{
      echo"  <img style='border-radius: 50% ; border:2px red solid;  margin-left: 120px;' class='avatar border-gray' src='assets/img/profile.jpg'  height='150px' width=45%> ";?> <?php
}
                                                $db->commit();
                                                $db->close();
                                                ?>
                                            </div>
                                    <form action="profile1.php"  method="post" enctype="multipart/form-data"   >
                                        <div class="row">

                                            <?php
                                            $db = new mysqli('localhost', 'root', '', 'advance');
                                            $qryStr = "select * from loginadmin WHERE `name`='" .  $_SESSION['u'] . "'";


                                            $rs = $db->query($qryStr);
                                            $row = $rs->fetch_object();

                                                ?>







                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" style="width: 400px" name="username" value="<?php echo $row->name; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Pass</label>
                                                    <input type="text" class="form-control" placeholder="Pass" style="width: 400px" name="pass" value="<?php echo $row->pass; ?>" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email" style="width: 400px" name="email" value="<?php echo $row->email; ?>" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">

                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Place</label>
                                                    <input type="text" class="form-control" placeholder="Place" style="width: 400px" name="place" value="<?php echo $row->place; ?>" />
                                                </div>
                                            </div>

                                </div>

                                            <div class="row">
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" placeholder="Phone" style="width: 400px" name="phone" value="<?php echo $row->phone; ?>" />
                                                </div>

                                            <?php
                                            $db->commit();
                                            $db->close();
                                            ?>



                                        </div>  </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="file" class="input-field" name="image1"  id="image1"> </div>
                                            </div>
                                        </div></div>
                                            <div class="row">
                                                <div class="col-md-12">
                                        <button type="submit" class="btn btn-info btn-fill pull-right" name="up">Update Profile</button>
                                       </div> </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                                <div class="card-body">
                                    <div class="author">

                                        <p class="description">

                                        </p>
                                    </div>

                                </div>
                                <hr>
                                <div id="chartContainer" style=" margin-left:500px ;position:absolute; height: 500px; width: 80%;"></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                            </div>
                        </div>
                    </div>
                </div>


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
<script>

</script>
</body>

</html>
