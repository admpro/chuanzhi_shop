<?php
//include '../functions/fc.php';
include '../view/User-login.html';
if(isset($_POST['sm'])){
    $user=$_POST['user'];
    $pwd=$_POST['pwd'];
    include '../fcPDO.php';
    $check=checkUserPwd($user, $pwd);
    if(key($check)){
        echo $check[1];
    }else{
        header("location:../Controller/IndexController_1.php");
    }
}
?>