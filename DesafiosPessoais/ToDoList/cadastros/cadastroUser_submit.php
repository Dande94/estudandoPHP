<?php
require_once '../classes/user.class.php';
$addUser = new User();
$redirecionar = 'Location: cadastroUSerForm.php';
if(!empty($_POST['emailUser'])){
    if(isset($_POST['emailUser'])){
        $nomeUser = $_POST['nomeUser'];
        $emailUser = $_POST['emailUser'];
        $passUser = $_POST['passUser'];
        $addUser->adicionarUser($nomeUser, $emailUser, $passUser);
        header('Location: ../login&logout/login.php');
    }else{
        header($redirecionar);
        die;
    }
}else{
    header($redirecionar);
    die;
}
?>