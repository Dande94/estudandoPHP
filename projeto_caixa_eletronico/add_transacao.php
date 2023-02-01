<?php
session_start();
require_once "conexaoBanco.php";

if(isset($_POST['tipo'])){
    $tipo=$_POST['tipo'];
    $valor=str_replace(",",".",$_POST['valor']);
    $valor=floatval($valor);

    $sql="INSERT INTO histórico SET id_conta= :id_conta, tipo = :tipo, valor = :valor, data_operacao = NOW()";
    $sql = $pdo->prepare($sql);
    $sql ->bindValue(':id_conta', $_SESSION['banco']);
    $sql ->bindValue(':tipo', $tipo);
    $sql ->bindValue(':valor', $valor);
    $sql->execute();

    if($tipo == '0'){
        //depósito
        $sql="UPDATE contas SET saldo = saldo + :valor WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql ->bindValue(':valor', $valor);
        $sql ->bindValue(':id', $_SESSION['banco']);
        $sql->execute();
    }else{
        //retirada
        $sql="UPDATE contas SET saldo = saldo - :valor WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql ->bindValue(':valor', $valor);
        $sql ->bindValue(':id', $_SESSION['banco']);
        $sql->execute();
    }


    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Caixa Eletrônico</title>
</head>
<style>
    body{
        background: linear-gradient(30deg, rgba(162,219,111,1) 12%, rgba(86,163,134,1) 38%, rgba(35,52,37,1) 90%);
        width:100vw;
        height:100vh;
        color:#eee;
    }
</style>
<body class="container-md">
    <h3>Transação</h3>
    <form  class="d-flex justify-content-between" style="max-height:38px;" action="" method="post">

        <div>
        <Strong>Tipo de Transação:</Strong>
            <select class="btn btn-secondary dropdown-toggle" name="tipo" id="">
                <option class="dropdown-item" value="0">Depósito</option>
                <option class="dropdown-item" value="1">Retirada</option>
            </select>
        </div>

        <div class="d-flex align-items-center">
            <Strong class="d-block mx-2">Valor:</Strong> 
            <div class="input-group" style="max-width:300px;">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" name="valor" pattern="[0-9,.]{1,}">
                <span class="input-group-text">,00</span>
            </div>  
        </div>

        <input class="btn btn-outline-light" type="submit" value="Concluir">
        <a href="index.php" class="btn btn-outline-warning">Voltar</a>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>