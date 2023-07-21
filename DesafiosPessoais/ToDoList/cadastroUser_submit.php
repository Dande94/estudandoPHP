<?php
require_once 'classes/user.class.php';
$addUser = new User();
if(!empty($_POST['emailUser'])){
    if(isset($_POST['emailUser'])){
        $nomeUser = $_POST['nomeUser'];
        $emailUser = $_POST['emailUser'];
        $passUser = $_POST['passUser'];
        $addUser->adicionarUser($nomeUser, $emailUser, $passUser);
    
        header('Location: index.php');
    }else{
        header('Location: login&logout/login.php');
        die;
    }
}else{
    header('Location: login&logout/login.php');
    die;
}
?>