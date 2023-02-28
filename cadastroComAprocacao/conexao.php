<?php
try{
    $this->pdo = new PDO("mysql:dbname=testeprorim;host=localhost","root","");
}catch(PDOException $e){
    echo "FALHA: ".$e->getMessage();
}