<?php
session_start();
require_once "conexaoBanco.php";

if(empty($_SESSION['logado'])){
    header("Location: login.php");
    exit;
}

$email='';
$codigo='';

$sql = "SELECT email, codigo from usuarios WHERE id = '".addslashes($_SESSION['logado'])."'";
$sql = $pdo->query($sql);
// $sql = $pdo -> prepapre($sql);
// $sql -> execute();
if($sql->rowCount() > 0){
    $info = $sql->fetch();
    $email = $info['email'];
    $codigo = $info['codigo'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Área Interna do sistema</h1>
    <span><h3>Usuário: <?php echo $email;?> - <a href="">Sair</a></h3>
    <p>LInk: http://localhost/projeto_registroporconvite/cadastrar.php?codigo=<?php echo $codigo; ?></p>
</body>
</html>