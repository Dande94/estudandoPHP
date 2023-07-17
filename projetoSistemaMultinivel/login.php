<?php
session_start();
require_once 'conexaoBanco.php';

if(!empty($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->execute();

    if($sql->rowCount() > 0){
        $consulta = $sql->fetch();
        $_SESSION['mmnlogin'] = $consulta['id'];
        header("Location: index.php");
        exit;
    }else{
        echo "Usuario ou Senha incorretos!";
    }

}


?>
<form action="" method="post">
    <label for="">Email</label><br>
    <input type="email" name="email" id=""><br>
    <br><br>
    <label for="">Senha</label><br>
    <input type="password" name="senha" id="">
    <br><br>
    <input type="submit" value="Logar">
</form>