<?php
session_start();
require_once "conexaoBanco.php";

if(isset($_SESSION['banco']) && !empty($_SESSION['banco'])){

}else{
    header("Location: login.php");
    exit;
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
    <h1>Banco dos Dev's</h1>
    <h3>Agência:000 </h3>
    <h3>Conta:000 </h3>
    <h4>Saldo:000 </h4>

    <a href="sair.php">Sair</a>

</body>
</html>