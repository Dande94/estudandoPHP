<?php
require_once '../classes/user.class.php';
$addUser = new User();
$redirecionar = 'Location: cadastroUSerForm.php';
if(!empty($_POST['emailUser']) && !empty($_POST['passUser'])){
    if(isset($_POST['emailUser'])){
        $nomeUser = $_POST['nomeUser'];
        $emailUser = $_POST['emailUser'];
        $passUser = $_POST['passUser'];
        $addUser->adicionarUser($nomeUser, $emailUser, $passUser);
        header('Location: ../login&logout/login.php?retorno=7');
    }else{
        header($redirecionar."?retorno=8");
        die;
    }
}else{
    header($redirecionar."?retorno=8");
    die;
}
?>