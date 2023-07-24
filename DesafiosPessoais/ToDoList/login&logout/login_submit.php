<?php
require_once '../classes/user.class.php';
$loginUser = new User();
$redirecionar = "Location: login.php";
if(!empty($_POST['emailUser']) && !empty($_POST['passUser'])){
    $emailUser = $_POST['emailUser'];
    $passUser = $_POST['passUser'];
    if($loginUser->validarLogin($emailUser, $passUser)){
        header('Location: ../index.php');
    }else{
        header($redirecionar);
        die;
    }
}else{
    header($redirecionar);
    die;
}
?>