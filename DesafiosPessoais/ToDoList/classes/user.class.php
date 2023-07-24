<?php

class User{
    private $pdo;
    public function __construct()
    {
        require_once '../config/conexaoBanco.php';
        $this->pdo = new PDO($dsn,$dbuser,$dbpass);
    }

    public function adicionarUser($nomeUSer ,$emailUser, $passUser){
      if($this->existeEmail($emailUser) == false){
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nomeUSer,:emailUser,:passUser)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nomeUSer', $nomeUSer);
        $sql->bindValue(':emailUser', $emailUser);
        $sql->bindValue(':passUser', password_hash($passUser, PASSWORD_DEFAULT));
        $sql->execute();
        return true;
      }else{
        return false;
      }

    }
    private function existeEmail($emailUser){
        $sql = "SELECT * FROM usuarios WHERE email = :emailUser";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':emailUser', $emailUser);
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
}
?>