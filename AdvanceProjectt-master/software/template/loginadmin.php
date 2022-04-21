

<?php

session_start();

if(isset($_POST['jaw'])) {

    if (isset($_POST['n']) && isset($_POST['p'])) {
        $uname = $_POST['n'];
        $pname = $_POST['p'];

        try {
            $db = new mysqli('localhost', 'root', '', 'advance');

            $qryStr = "select * from loginadmin";
            $res = $db->query($qryStr);
            $a = 1;
            for ($i = 0; $i < $res->num_rows; $i++) {
                $_SESSION['u'] = $uname;
                $row = $res->fetch_object();
                if ($row->name == $uname && $pname == $row->pass) {
                    $a = 0;
                    $_SESSION['ISmem'] = 1;
                    $_SESSION['u'] = $uname;
                    $_SESSION['admin'] = 1;
                    $db->close();
                    header('location:index.php');
                }


            }
            if ($a == 1) {
                header('location:loginadmin.php');
            }

        } catch (Exception $e) {

        }


    }
}


?>


<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
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
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">

                            <p class="lead">Login to your account</p>
                        </div>
                        <form class="form-auth-small" method="post">
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">UserName</label>
                                <input type="text" class="form-control" id="signin-email" name="n" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" id="signin-password" name="p" placeholder="Password">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">


                                </label>
                            </div>
                            <button type="submit" name="jaw" class="btn btn-primary btn-lg btn-block">LOGIN</button>

                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h1 class="heading"></h1>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>

</html>
