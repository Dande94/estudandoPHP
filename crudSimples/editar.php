<?php
require_once "conexaoBanco.php";


if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = $_GET['id'];
};

if(isset($_POST['nome']) && empty($_POST['nome']) == false){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql -> bindValue(':nome', $nome);
    $sql -> bindValue(':email', $email);
    $sql -> bindValue(':id', $id);
    $sql->execute();
    header("Location: index.php");
};

$sql = "SELECT * FROM usuarios WHERE id = :id";
$sql = $pdo->prepare($sql);
$sql -> bindValue(':id', $id);
$sql->execute();
if($sql->rowCount() > 0){
    $dado = $sql -> fetch();
}else{
    header("Location: index.php");
};


?>
<form action="" method="post">
    Nome: <br>
    <input type="text" name="nome" id="" value=" <?=$dado['nome']?> "><br><br>
    Email: <br>
    <input type="email" name="email" id=""value =" <?=$dado['email']?>"><br><br>

    <button type="submit">Atualizar</button>
</form>