<?php
$dsn = "mysql:dbname=registro_por_convite;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
    echo "Falhou na conexão: ".$e->getMessage;
}
?>