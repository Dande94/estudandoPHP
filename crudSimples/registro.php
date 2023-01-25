<?php
require_once "conexaoBanco.php";

if(isset($_POST['nome']) && empty($_POST['nome']) == false){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);


    $sql = "INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql -> bindValue(':nome', $nome);
    $sql -> bindValue(':email', $email);
    $sql -> bindValue(':senha', $senha);
    $sql->execute();

    header("Location: index.php");
}

?>
<form action="" method="post">
    Nome: <br>
    <input type="text" name="nome" id=""> <br><br>
    Email: <br>
    <input type="email" name="email" id=""><br><br>
    Senha: <br>
    <input type="text" name="senha" id=""><br><br>

    <button type="submit">Cadastrar</button>
</form>