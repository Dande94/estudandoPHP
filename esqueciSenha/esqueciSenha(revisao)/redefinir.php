<?php require_once 'conexao.php';
if(!empty($_GET['token'])){//verifica a existência de uma token;
    $token = $_GET['token'];
    $sql = "SELECT * FROM usuarios_token WHERE hash = :hash AND used = 0 AND expired_in > NOW()";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":hash", $token);
    $sql->execute();
    
    if($sql->rowCount() > 0){
        $sql = $sql->fetch();
        $id = $sql['id_user'];
        if(!empty($_POST['senha'])){
            $senha= $_POST['senha'];
            $sql ="UPDATE usuarios SET senha = :senha WHERE id = :id" ;
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":senha", md5($senha));
            $sql->bindValue(":id", $id);
            $sql->execute();
            
            $sql ="UPDATE usuarios_token SET used = 1  WHERE hash = :hash" ;
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":hash", $token);
            $sql->execute();
            echo "Senha alterada com sucesso!";
        }   
        ?>
            <form action="" method="post">
                <label>Digite a nova senha:</label>
                <input type="password" name="senha" id="">
                <input type="submit" value="Salvar Nova Senha">
            </form>
        <?php
    }else{
        echo "Token inválido ou usaddo";
        exit;
    }
};

?>