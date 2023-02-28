<?php require_once "conexao.php";

if(!empty($_GET['token'])){
    $token = $_GET['token'];
    $sql= "SELECT * FROM usuarios_token WHERE hash = :hash AND used = 0 AND expired_in > NOW()";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":hash", $token);
    $sql->execute();

    if($sql->rowCount()>0){
        ?>
        <form action="" method="post">
            Digite a nova Senha: <br>
            <input type="password" name="senha" id="">
        </form>
        <?php
    }else{
        echo "Token Inválido ou Usado";
        exit;
    }

}


?>