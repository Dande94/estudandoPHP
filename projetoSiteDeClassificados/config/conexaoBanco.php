<?php
session_start();
$dsn="mysql:dbname=projeto_classificados;host=localhost";
$dbuser="root";
$dbpass="";
try{
    $pdo = new PDO($dsn,$dbuser,$dbpass);
}catch(PDOException $e){
    die($e->getMessage());
}

?>