<?php
class Usuario{
    //cadastro
    public function cadastar($nomeUser, $telUser, $emailUser, $senhaUser){
        global $pdo;
        if($this->verificarEmailExiste($emailUser)){
            return false;
        }else{
            $sql = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES(:nomeUser, :emailUser, :senhaUser, :telUser)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":nomeUser", $nomeUser);
            $sql->bindValue(":emailUser", $emailUser);
            $sql->bindValue(":senhaUser", password_hash($senhaUser, PASSWORD_DEFAULT));
            $sql->bindValue(":telUser", $telUser);
            $sql->execute();
            return true;
        }
    }

    //login
    public function loginUser($emailUser, $senhaUser){
        global $pdo;
        if($this->verificarEmailExiste($emailUser)){
            $sql = "SELECT id, senha FROM usuarios WHERE email = :emailUser";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":emailUser", $emailUser);
            $sql->execute();

            $dados =$sql->fetch();
            if(password_verify($senhaUser, $dados['senha'])){
                $_SESSION['cLogin'] = $dados['id'];
                return true;
            }else{
                return false;
            }
        }
        
    }
    //recursiva
    private function verificarEmailExiste($emailUser){
        global $pdo;
        $sql = "SELECT id FROM usuarios WHERE email = :email";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email", $emailUser);
        $sql->execute();
        return ($sql->rowCount() > 0) ? true : false;
    }
}
?>