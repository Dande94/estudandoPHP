<?php
require_once '../classes/tarefa.class.php';
$excluirTarefa = new Tarefa();

if(!empty($_GET['id'])){
    $id_tarefa = $_GET['id'];
    $excluirTarefa->excluirTarefa($id_tarefa);
}
header("Location: ../index.php");

?>