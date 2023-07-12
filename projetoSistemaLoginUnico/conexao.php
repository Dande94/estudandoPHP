<?php
try{
    $dsn="mysql:dbname=projeto_sistema_login_unico;host=localhost";
    $dbuser="root";
    $dbpass="";
    $pdo = new PDO($dsn,$dbuser,$dbpass);
}catch(PDOException $e){
    die($e->getMessage());
}


?>

