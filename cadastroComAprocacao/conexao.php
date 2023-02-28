<?php
try{
    $dsn="mysql:dbname= cadastroaprovacao;host=localhost";
    $dbuser="root";
    $dbpass="";
    $this->pdo = new PDO($dsn,$dbuser,$dbpass);
}catch(PDOException $e){
    die($e->getMessage());
}