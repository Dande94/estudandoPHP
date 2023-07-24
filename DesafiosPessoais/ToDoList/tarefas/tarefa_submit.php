<?php
require_once '../classes/tarefa.class.php';
$tarefa = new Tarefa();

if(!empty($_POST['nome_tarefa'] && is_string($_POST['nome_tarefa']))){
    $nome_tarefa = $_POST['nome_tarefa'];
    $id_user = $_POST['id_user'];
    $tarefa->registrarTarefa($nome_tarefa, $id_user);
    header("Location: ../index.php");
}else{
    header("Location: ../index.php");
    die();
}


?>