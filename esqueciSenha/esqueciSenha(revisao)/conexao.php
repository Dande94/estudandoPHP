<?php
try{
    $dsn="mysql:dbname=esqueci_senha;host=localhost";
    $dbuser="root";
    $dbpass="";
    $pdo = new PDO($dsn,$dbuser,$dbpass);
    // echo '<script>alert("conectou!")</script>';
}catch(PDOException $e){
    die($e->getMessage());
}
