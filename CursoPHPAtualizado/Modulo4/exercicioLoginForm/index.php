<?php
session_start();
if(!isset($_SESSION['name']) || !isset($_COOKIE['name'])){
    header('Location: login.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php
        $nome = $_COOKIE['name'];
        echo "<h2>{$nome}</h2>";
     ?></h2>
     <a href="sair.php">Sair</a>
</body>
</html>