<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cabeçalho</h1>
    <?php
        if(isset($_COOKIE['nome'])){
            $nome = $_COOKIE['nome'];
            echo "<h2>{$nome}</h2>";
        }
    ?>
    <hr>
    
    
