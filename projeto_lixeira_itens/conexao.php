<?php
try{
    $dsn="mysql:dbname=projeto_lixeira_itens;host=localhost";
    $dbuser="root";
    $dbpass="";
    $pdo = new PDO($dsn,$dbuser,$dbpass);
}catch(PDOException $e){
    die($e->getMessage());
}
?>