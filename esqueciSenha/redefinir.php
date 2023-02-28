<?php require_once "conexao.php";

if(!empty($_GET['token'])){
    $token = $_GET['token'];
    $sql= "SELECT * FROM usuarios_token WHERE hash = :hash AND used = 0 AND expired_in > NOW()";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":hash", $token);
    $sql->execute();
    
    if($sql->rowCount()>0){
        if(!empty($_POST['senha'])){
            $senha = $_POST['senha'];

            $sql = $sql->fetch();

            $id = $sql['id_user'];

            $sql = "UPDATE usuarios SET senha = :senha WHERE id  = :id";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":senha", md5($senha));
            $sql->bindValue(":id", $id);
            $sql->execute();

            $sql = "UPDATE usuarios_token SET used = 1 WHERE hash = :hash";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":hash", $token);
            $sql->execute();

            echo "Senha Alterada com Sucesso!!";
            exit;
        }
        ?>
        <form action="" method="post">
            Digite a nova Senha: <br>
            <input type="password" name="senha" id=""> <br><br>
            <input type="submit" value="Mudar Senha">

        </form>
        <?php

    }else{
        echo "Token Inválido ou Usado";
        exit;
    }

}


?>