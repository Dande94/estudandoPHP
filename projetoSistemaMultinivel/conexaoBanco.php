<?php
$dsn = "mysql:dbname=projeto_sistema_multinivel;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
    echo "Falhou na conexão: ".$e->$getMessage;
    die;
}
?>