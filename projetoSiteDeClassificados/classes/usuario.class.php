<?php
class Usuario{
    public function getTotalUsuarios(){
        global $pdo;
        $sql = $pdo->query("SELECT COUNT(*) as c FROM usuarios");
        $row = $sql->fetch();
        return $row['c'];
    }
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

    public function getNomeUser($idUSer){
        global $pdo;
        $sql = "SELECT nome FROM usuarios WHERE id = :idUser";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":idUser", $idUSer);
        $sql->execute();

        if($sql->rowCount() > 0){
            $nome = $sql->fetch();
            echo $nome['nome']." |";
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