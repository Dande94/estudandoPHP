<?php
session_start();
require_once "conexaoBanco.php";

if(isset($_POST['tipo'])){
    $tipo=$_POST['tipo'];
    $valor=str_replace(",",".",$_POST['valor']);
    $valor=floatval($valor);

    $sql="UPDATE"



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <h1>Transação</h1>
    <form action="" method="post">
        <Strong>Tipo de Transação:</Strong>
        <select name="tipo" id="">
            <option value="0">Depósito</option>
            <option value="1">Retirada</option>
        </select><br><br>
        <Strong>Valor:</Strong> <br>
        <input type="text" name="valor" pattern="[0-9,.]{1,}" id=""><br><br>

        <input type="submit" value="Concluir">

    </form>
</body>
</html>