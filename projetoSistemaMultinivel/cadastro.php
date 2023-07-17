<?php
session_start();
require_once 'conexaoBanco.php';

if(!empty($_POST['nomeUser']) && !empty($_POST['email'])){
    $nomeUser = addslashes($_POST['nomeUser']);
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['email']);
    $id_pai = $_SESSION['mmnlogin'];

    $sql = 'SELECT * FROM usuarios WHERE email = :email ';
    $sql  = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() > 0){
        echo "Usuarios já cadastrado";
    }else{
        $sql = 'INSERT INTO usuarios (id_pai, nome, email, senha) VALUES (:id_pai, :nome, :email, :senha)';
        $sql  = $pdo->prepare($sql);
        $sql->bindValue(':id_pai', $id_pai);
        $sql->bindValue(':nome', $nomeUser);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();


    }

}


?>
<h2>Cadastro de novo usuarios</h2>

<form action="" method="post">
    <label for="">Nome</label><br>
        <input type="text" name="nomeUser" id="">
        <br><br>
        <label for="">Email</label><br>
        <input type="email" name="email" id=""><br>
        <br><br>
        <!-- a senha será o mesmo que o email -->
        <input type="submit" value="Cadastrar">
</form>