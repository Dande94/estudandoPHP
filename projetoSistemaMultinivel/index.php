<?php
session_start();
require_once 'conexaoBanco.php';
if(empty($_SESSION['mmnlogin'])){
    header("Location: login.php");
    die;
}

$id = $_SESSION['mmnlogin'];

$sql = 'SELECT nome FROM usuarios WHERE id = :id';
$sql = $pdo->prepare($sql);
$sql->bindValue(':id', $id);
$sql->execute();

if($sql->rowCount() > 0){
    $sql = $sql->fetch();
    $nomeUser = $sql['nome'];
}else{
    header("Location: login.php");
    die;
};


?>
<h2>Sistema Multinivel</h2>
<h3>Usuario Logado: <?php echo ucwords($nomeUser);?></h3>
<a href="cadastro.php">Cadastrar Novo Usuario</a>
<br>
<a href="logout.php">Sair</a>