

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
<style>
    body{
        /*../template/assets/img/login-bg.jpg*/
        background-image: url("assets/img/prof.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment:fixed ;
    }
    div.div1{
        left:40px;
        top:90px;
        position: absolute;
        height: 485px;
        width: 505px;
        background-color: white;
        border-radius: 50px;
    }
    div.div2{
        left:40px;
        top:90px;
        position: absolute;
        height: 480px;
        width: 500px;
        background-color:pink;
        opacity: .5;
        border:4px dashed orangered;
        border-radius: 50px;
    }
    img.img{
        left:37%;
        position: absolute;
        width: 150px;
        height: 150px;
    }
    div.div3{
        left:40px;
        top:90px;
        position: absolute;
        height: 480px;
        width: 500px;
        overflow: hidden;

    }
    button.submit-btn:hover{
        box-shadow: 0 0 20px 5px yellow;
        box-shadow: 0 0 20px 7px orangered;
    }

    .Button_Box{
        width: 220px;
        top: 150px;
        margin: 35px auto;
        position: absolute;
        left:180px;
        font-size: large;
        color: orangered;

        /*box-shadow: 0 0 20px 9px #ff61241f;*/
        /*border-radius: 30px;*/

    }
    .submit-btn {
        width: 85%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;

        margin: auto;
        background: linear-gradient(to right, #ff105f, #ffad06);
        border: 0;
        outline: none;
        border-radius: 30px;
    }

    span{
        color: #777;
        font-size: 15px;
        bottom: 68px;
        position: absolute;

    }
    .span1{
        color: #d11507;
        font-size: 17px;
        bottom: 68px;
    }
    .href{

        margin: 400px 400px 300px 400px;
    }

    #btn{
        top: 0;
        left: 0;
        position: absolute;

        width: 110px;
        height: 100%;
        background: linear-gradient(to right, #ff105f, #ffad06);
        border-radius: 30px;
        transition: .5s;}


    .input-group{
        top: 270px;
        position: absolute;
        width: 280px;
        transition: .5s;
        left: 150px;
    }

    .input-field{
        width: 100%;
        padding: 10px 0;
        margin: 10px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline:none;
        background: transparent;
    }
    #login{

        left: 50px;}

    #register{

        left: 650px;}
    *{
        margin: 0;
        padding: 0;
    }
</style>
<body>

<!-- WRAPPER -->

<div class="div1">
    <img class="img" src="assets/img/profile.jpg">
</div>
<div class="div2">
</div>
<div class="div3">
    <div class="Button_Box">
        <p class="lead">Login to your account</p>


    </div>
    <form id="login"  class="input-group" method="post">
        <input type="text" class="input-field" placeholder="User Name" id="signin-email" name="n" required>
        <input type="password" class="input-field" placeholder="Enter Password" id="signin-password" name="p" required>

        <button type="submit" name="jaw" class="btn btn-primary btn-lg btn-block submit-btn">LogIn</button>
    </form>


    <!-- END WRAPPER -->
</body>

</html>
