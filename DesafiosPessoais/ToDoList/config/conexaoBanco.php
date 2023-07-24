<?php

try{
    $dsn = "mysql:dbname=to_do_list_php;host=localhost";
    $dbuser="root";
    $dbpass="";
    $pdo = new PDO($dsn,$dbuser,$dbpass);
}catch(PDOException $e){
    die($e->getMessage());
}
/*
$dsn = "mysql:dbname=id21035488_andersonnunesdevdb;host=localhost";
$dbuser = "id21035488_dande_nunes_94";
$dbpass = "_Isabel@2611";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
    echo "Falhou na conexão: ".$e->$getMessage;
    die;
}
*/

?>