<?php
session_start();
require_once "conexaoBanco.php";

if(isset($_POST['agencia']) && !empty($_POST['agencia'])){

    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = sha1($_POST['senha']);

    $sql = "SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql -> bindValue(':agencia', $agencia);
    $sql -> bindValue(':conta', $conta);
    $sql -> bindValue(':senha', $senha);
    $sql->execute();

    if($sql->rowCount() > 0){
        $sql = $sql->fetch();
        $_SESSION['banco']=$sql['id'];
        header("Location: index.php");
        exit;
    }

}else{

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
    }
</style>
<body  class="container">
    <div class="card m-2" style="width: 18rem;">
    <img src="3563935.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h1>Login</h1>
        <form action="" method="post">
            <Strong>Agência:</Strong> <br>
            <input class="form-control" type="text" name="agencia" id=""><br><br>
            <Strong>Conta:</Strong> <br>
            <input class="form-control" type="text" name="conta" id=""><br><br>
            <Strong>Senha:</Strong> <br>
            <input class="form-control" type="password" name="senha" id=""><br><br>

            <div class="d-grid gap-2">
                <input class="btn btn-outline-primary px-4" type="submit" value="Entrar">
            </div>

        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>