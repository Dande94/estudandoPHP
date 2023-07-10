<?php

$dsn="mysql:dbname=projeto_reserva;host=127.0.0.1";
$dbUser="root";
$dbPass="";

try{
    $pdo= new PDO($dsn,$dbUser,$dbPass);
}catch(PDOException $e){
    die($e->getMessage());
}

?>

