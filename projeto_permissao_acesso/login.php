<?php
session_start();

require_once "conexao.php";
require_once "classes/usuarios.class.php";

if(!empty($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = SHA1($_POST['senha']);

    $usuarios = new Usuario($pdo);//instanciando classe Usuario, e passando e solcitando a conexão com o banco de dados;
    if($usuarios->fazerLogin($email,$senha)){//chamando função fazerLogin da classe usuario;
        header("Location: index.php");
        exit;
    }else{
        echo "E-mail e/ou senha inválidos!";
    }
}

?>
<h3>Login</h3>
<form action="" method="post">
    <span>
        <label for="">E-mail:</label>
        <input type="email" name="email" id="">
    </span>
    <span>
        <label for="">Senha</label>
        <input type="password" name="senha" id="">
    </span>
    <span>
        <input type="submit" value="Entrar">
    </span>
</form>