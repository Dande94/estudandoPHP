<?php
require_once 'conexaoBanco.php';
date_default_timezone_set('America/Sao_Paulo');

$ip = $_SERVER['REMOTE_ADDR'];
$hora = date('H:i:s');

//registrar o acesso do IP
$sql = "INSERT INTO acessos (ip,hora) VALUES (:ip,:hora)";
$sql = $pdo->prepare($sql);
$sql->bindValue(":ip",$ip);
$sql->bindValue(":hora",$hora);
$sql->execute();

//deletar registro com mais de 5 minutos
$sql = "DELETE FROM acessos WHERE hora < :hora";
$sql=$pdo->prepare($sql);
$sql->bindValue(":hora",date('H:i:s', strtotime('-5 minutes')));
$sql->execute();

//contar os registro dentro dos 5 minutos
$sql = "SELECT * FROM acessos WHERE hora > :hora GROUP BY ip";
$sql = $pdo->prepare($sql);
$sql->bindValue(":hora",date('H:i:s', strtotime('-5 minutes')));
$sql->execute();
$contagem = $sql->rowCount();
echo "User's Online: ".$contagem;




?>