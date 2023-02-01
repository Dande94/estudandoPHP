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