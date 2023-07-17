<?php
require_once 'conexaoBanco.php';
date_default_timezone_set('America/Sao_Paulo');

$ip = $_SERVER['REMOTE_ADDR'];
$hora = date('H:i:s');

$sql = "INSERT INTO acessos (ip,hora) VALUES (:ip,:hora)";
$sql = $pdo->prepare($sql);
$sql->bindValue(":ip",$ip);
$sql->bindValue(":hora",$hora);
$sql->execute();

$sql = "SELECT * FROM acessos WHERE hora > :hora GROUP BY ip";
$sql = $pdo->prepare($sql);
$sql->bindValue(":hora",date('H:i:s', strtotime('-5 minutes')));
$sql->execute();
$contagem = $sql->rowCount();
echo $contagem;

// $sql = "DELETE FROM acessos ";



?>