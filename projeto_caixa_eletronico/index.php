<?php
session_start();
require_once "conexaoBanco.php";

if(isset($_SESSION['banco']) && !empty($_SESSION['banco'])){
    $id = $_SESSION['banco'];
    $sql = "SELECT * FROM contas WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount()>0){
        $info = $sql->fetch();
    }else{
        header("Location: login.php");
        exit;
    }

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
    <h2>Tiular: <?php echo $info['titular']?> </h2>
    <h3>Agência: <?php echo $info['agencia']?> </h3>
    <h3>Conta: <?php echo $info['conta']?> </h3>
    <h4>Saldo: <?php echo $info['saldo']?> </h4>

    <a href="sair.php">Sair</a>

</body>
</html>