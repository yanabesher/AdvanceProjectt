<?php
////$exist=0;
//if(isset($_POST['UserName']) && isset($_POST['email']) && isset($_POST['password'])){
//    $_SESSION['exist'] = 0;
//    @$dp=new mysqli('localhost','root','','advance');
//    if(mysqli_connect_errno()){
//        echo "Error in connection with data base";
//        die();
//    }
//    $strQry='select * from member';
//    $res=$dp ->query($strQry);
//    for($i=0;$i<$res->num_rows;$i++){
//        $row=$res ->fetch_assoc();
//        if( $_POST['email']==$row['email'] ){
//            $_SESSION['exist']=1;
//            echo  '<p style="color: red ; position: relative ; left: 622px ; top: 390px;z-index: 5">You are already a member</p>';
//        }
//    }
//    if(!$_SESSION['exist']){
//        $name=$_POST['UserName'];
//        $email=$_POST['email'];
//        $pas=$_POST['password'];
//        $stm="insert into member values ('".$email."','".$name."','".$pas."')";
//        $result=$dp ->query($stm);
//        header("location:login page.php");
//    }
//}
//?>
