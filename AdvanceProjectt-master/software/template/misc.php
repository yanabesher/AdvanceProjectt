
<?php
//
//if (isset($_POST['show'])) {
//
//    $db = new mysqli('localhost', 'root', '', 'advance');
//
//
//    $dd1 = $_POST['id1'];
//    echo '<script>alert($dd1)</script>';
//
//    $qryStr = "SELECT * FROM games  ";
//
//    $res = $db->query($qryStr);
//    for ($i = 0; $i < $res->num_rows; $i++) {
//        $row = $res->fetch_object();
//        if ($row->Rank == $dd1) {
//            echo '<script>alert($dd1)</script>';
//
//
//            $db->commit();
//            $db->close();
//
//
//        }
//
//    }
//
//
//}


if (isset($_POST['up'])) {
    $db = new mysqli('localhost', 'root', '', 'advance');

    $dd=$_POST['id1'];



    $d4=$_POST['id4'];
    $d5=$_POST['id5'];
    $d6=$_POST['id6'];
    $d7=$_POST['id7'];
    $d8=$_POST['id8'];
    $d9=$_POST['id9'];
    $d10=$_POST['id10'];
    $d11=$_POST['id11'];

    if(isset($_POST['id2'])){

        $d2=$_POST['id2'];
        if($d2!=''){
            $qryStr = "UPDATE `games` SET  `Name`='$d2'  
WHERE `Rank`='" . $dd . "' ";

            $rs = $db->query($qryStr);}
    }
    if(isset($_POST['id3'])){
        $d3=$_POST['id3'];
        if($d3!=''){
            $qryStr = "UPDATE `games` SET  `Platform`='$d3'  
WHERE `Rank`='" . $dd . "' ";

            $rs = $db->query($qryStr);}
    }

    if(isset($_POST['id4'])){

        $d4=$_POST['id4'];
        if($d4!=''){
            $qryStr = "UPDATE `games` SET  `Year`='$d4'  
WHERE `Rank`='" . $dd . "' ";

            $rs = $db->query($qryStr);}
    }


    if(isset($_POST['id5'])){

        $d5=$_POST['id5'];
        if($d5!=''){
            $qryStr = "UPDATE `games` SET  `Genre`='$d5'  
WHERE `Rank`='" . $dd . "' ";

            $rs = $db->query($qryStr);}
    }


    if(isset($_POST['id6'])){

        $d6=$_POST['id6'];
        if($d6!=''){
            $qryStr = "UPDATE `games` SET  `Publisher`='$d6'  
WHERE `Rank`='" . $dd . "' ";

            $rs = $db->query($qryStr);}
    }






    if(isset($_POST['id7'])){

        $d7=$_POST['id7'];
        if($d7!=''){
            $qryStr = "UPDATE `games` SET  `NA_Sales`='$d7'  
WHERE `Rank`='" . $dd . "' ";

            $rs = $db->query($qryStr);}
    }



    if(isset($_POST['id8'])){

        $d8=$_POST['id8'];
        if($d8!=''){
            $qryStr = "UPDATE `games` SET  `EU_Sales`='$d8'  
WHERE `Rank`='" . $dd . "' ";

            $rs = $db->query($qryStr);}
    }



    if(isset($_POST['id9'])){

        $d9=$_POST['id9'];
        if($d9!=''){
            $qryStr = "UPDATE `games` SET  `JP_Sales`='$d9'  
WHERE `Rank`='" . $dd . "' ";

            $rs = $db->query($qryStr);}
    }




    if(isset($_POST['id10'])){

        $d10=$_POST['id10'];
        if($d10!=''){
            $qryStr = "UPDATE `games` SET  `Other_Sales`='$d10'  
WHERE `Rank`='" . $dd . "' ";

            $rs = $db->query($qryStr);}
    }




    if(isset($_POST['id11'])){

        $d11=$_POST['id11'];
        if($d11!=''){
            $qryStr = "UPDATE `games` SET  `Global_Sales`='$d11'  
WHERE `Rank`='" . $dd . "' ";

            $rs = $db->query($qryStr);}
    }










    $db->commit();

    $db->close();




}


if (isset($_POST['rank'])) {
    $n1 = $_POST['rank'];
    $n='Misc';

    try {
        $db = new mysqli('localhost', 'root', '', 'advance');

        $qryStr = " DELETE FROM `games` WHERE `Rank`='" . $n1 . "' and `Genre`='" . $n . "'";
        $rs = $db->query($qryStr);
        $db->commit();
        $db->close();

    } catch (Exception $e) {

    }
}
if (isset($_POST['ad'])  && isset($_POST['id1']) && isset($_POST['id2']) && isset($_POST['id3'])&& isset($_POST['id4'])&& isset($_POST['id6'])&& isset($_POST['id7'])
    && isset($_POST['id8'])&& isset($_POST['id9'])&& isset($_POST['id10'])&& isset($_POST['id11'])) {


    $connect = mysqli_connect("localhost", "root", "", "advance");



    $id1= $_POST['id1'];
    $id2 = $_POST['id2'];
    $id3= $_POST['id3'];
    $id4 = $_POST['id4'];$id5= 'Misc';
    $id6 = $_POST['id6'];$id7= $_POST['id7'];
    $id8 = $_POST['id8'];$id9= $_POST['id9'];
    $id10 = $_POST['id10'];$id11= $_POST['id11'];


    try {
        $db = new mysqli('localhost', 'root', '', 'advance');

        $qryStr = " INSERT INTO `games` (`Rank`, `Name`,`Platform` ,`Year`,`Genre`,`Publisher`,`NA_Sales`,
                      `EU_Sales`,`JP_Sales`,`Other_Sales`,`Global_Sales`) VALUES ('" . $id1 . "' ,'".$id2."','" . $id3 . "','" . $id4 . "','" . $id5 . "','" . $id6 . "','" . $id7 . "','" . $id8 . "'
        ,'" . $id9. "','" . $id10 . "','" . $id11 . "') ";
        $rs = $db->query($qryStr);
        $db->commit();
        $db->close();




    } catch (Exception $e) {

    }
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
<style>

    #popup:target {
        display: block;
    }
    #popup {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.75);
        display: none;
        text-align: center;


    }
    #popup .close-popup {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 15px;
        text-decoration: none;
    }
    #popup .popup-content {
        border-radius: 50px;
        position: absolute;
        top: 55%;
        left: 50%;
        height: 600px;
        transform: translate(-50%, -50%);
        width: 400px;
        padding: 5px 20px;
        background: rgba(250,250,250, 0.8);
    }
    #popup1:target {
        display: block;
    }
    #popup1 {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.75);
        display: none;
        text-align: center;


    }
    #popup1 .close-popup1 {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 15px;
        text-decoration: none;
    }
    #popup1 .popup-content1 {
        border-radius: 50px;
        position: absolute;
        top: 55%;
        left: 50%;
        height: 600px;
        transform: translate(-50%, -50%);
        width: 400px;
        padding: 5px 20px;
        background: rgba(250,250,250, 0.8);
    }
    .input-field{
        width: 90%;
        padding: 10px 0;
        margin: 1px 0;
        border-left: 0;

        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999999;
        outline: none;
        background: transparent;}
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
        <form id="DEL" action="misc.php"  method="post" enctype="multipart/form-data">

            <input type="text"  placeholder="Rank" name="rank" required>

            <button type="submit" name="delete" id="delete" >Delete</button>




            <a   href="misc.php#popup"  target="_self" style="border: orange"  >
                <img width="100" height="50" border="0" align="center"  src="assets/img/add1.png" ><br>

            </a>
            <a   href="misc.php#popup1"  target="_self" style="border: orange"  >
                <img width="100" height="100" border="0" align="center"  src="assets/img/edite1.png" ><br>

            </a>
        </form>

        <form   id="popup" method="post">
            <div class="popup-content">

                <h1 class="b">NEW GAME</h1>

                <a href="#" class ="close-popup" target="_self">

                    <img class="img1"  height="50px" width="50px" src="assets/img/hoom.png"  >
                </a>
                <form id="login" class="input-group">
                    <input type="text" class="input-field" placeholder="Rank"  name="id1"  required>
                    <input type="text" class="input-field" placeholder="Name"  name="id2" required>
                    <input type="text" class="input-field" placeholder="Platform"  name="id3" required>
                    <input type="text" class="input-field" placeholder="Year"  name="id4" required>

                    <input type="text" class="input-field" placeholder="Publisher"  name="id6" required>
                    <input type="text" class="input-field" placeholder="NA_Sales"  name="id7" required>
                    <input type="text" class="input-field" placeholder="EU_Sales"  name="id8" required>
                    <input type="text" class="input-field" placeholder="JP_Sales"  name="id9" required>
                    <input type="text" class="input-field" placeholder="Other_Sales"  name="id10" required>
                    <input type="text" class="input-field" placeholder="Global_Sales"  name="id11" required>


                    <button type="submit" name='ad' class="submit-btn">ADD</button>

                </form>
            </div>

            <form   id="popup1" method="post">

                <div class="popup-content1">

                    <h1 class="b">UPDATE GAME</h1>

                    <a href="#" class ="close-popup1" target="_self">

                        <img class="img1"  height="50px" width="50px" src="assets/img/hoom.png"  >
                    </a>
                    <form id="login" class="input-group">

                        <input type="text" class="input-field" placeholder="Rank" name="id1"

                        >
                        <input type="text" class="input-field" placeholder="Name"  name="id2" >
                        <input type="text" class="input-field" placeholder="Platform"  name="id3" >
                        <input type="text" class="input-field" placeholder="Year"  name="id4" >
                        <input type="text" class="input-field" placeholder="Genre"  name="id5" >
                        <input type="text" class="input-field" placeholder="Publisher"  name="id6" >
                        <input type="text" class="input-field" placeholder="NA_Sales"  name="id7" >
                        <input type="text" class="input-field" placeholder="EU_Sales"  name="id8" >
                        <input type="text" class="input-field" placeholder="JP_Sales"  name="id9" >
                        <input type="text" class="input-field" placeholder="Other_Sales"  name="id10">
                        <input type="text" class="input-field" placeholder="Global_Sales"  name="id11" >


                        <button type="submit" name='up' class="submit-btn">UPDATE</button>

                    </form>
                </div>

                <?php

                try {
                    $db = new PDO('mysql:host=localhost;dbname=advance','root','');
                    $result=$db->query("SELECT * FROM games WHERE `Genre`='Misc'  ");
                    $all=$result->fetchAll();
                    $col=$all[1];
                    $columns=array();

                    echo "<pre>";
                    foreach($col AS $key=>$value)
                    {
                        if(is_string($key)){
                            $columns[]=$key;
                        }

                    }

                    echo "<table border='1'>";
                    foreach($columns AS $value){
                        echo "<th>$value</th>";
                    }
                    for($x=0;$x<count($all);$x++)
                    {
                        echo "<tr>";
                        for($y=0;$y<count($columns);$y++){

                            echo "<td style='cursor: pointer'>".$all[$x][$y]."</td>";

                        }
                        echo "</tr>";
                    }


                }catch(Exception $e){

                }






                ?>

















    </div>
    <!-- END MAIN -->

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

