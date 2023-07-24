<?php

class User{
    private $pdo;
    public function __construct()
    {
        require_once '../config/conexaoBanco.php';
        $this->pdo = new PDO($dsn,$dbuser,$dbpass);
    }

    //cadastro
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

    //login
    public function validarLogin($emailUser, $passUser){
      if($this->existeEmail($emailUser)){
        $sql = "SELECT * FROM usuarios WHERE email = :emailUser";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':emailUser', $emailUser);
        $sql->execute();
        
        $dado = $sql->fetch();
        if(password_verify($passUser, $dado['senha'])){
          session_start();
          $_SESSION['loginUSer'] = $dado['id'];
          return true;
        }else{
          return false;
        }
       }

    }
    public function nomeUser($id_user){
      $sql = "SELECT nome FROM usuarios WHERE id = :id_user";
      $sql = $this->pdo->prepare($sql);
      $sql->bindValue(":id_user", $id_user);
      $sql->execute();

      $info = $sql->fetch();
      return $info;

    }

    //recursiva
    private function existeEmail($emailUser){
      $sql = "SELECT * FROM usuarios WHERE email = :emailUser";
      $sql = $this->pdo->prepare($sql);
      $sql->bindValue(':emailUser', $emailUser);
      $sql->execute();

      return ($sql->rowCount() > 0) ? true : false;
  }
}
?>