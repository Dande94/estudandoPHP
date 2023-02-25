<?php

require_once "index.php";

class Usuario{
    private $id;
    private $email;
    private $senha;
    private $nome;

    private $pdo;

    public function __construct($i){//construtor 
        if(!empty($i)){
            try{
                $this->pdo = new PDO("mysql:dbname=blog2;host=localhost","root","");
            }catch(PDOException $e){
                echo "FALHA: ".$e->getMessage();
            }
            $sql = "SELECT *  FROM usuarios WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($i));

            if($sql->rowCount() > 0){
                $data = $sql->fetch();
                $this->id=$data['id'];
                $this->nome=$data['nome'];
                $this->email=$data['email'];
                $this->senha=$data['senha'];
            }
        }
    }

    //id:
    public function getID(){
        return $this->id;
    }
    
    //email:
    public function setEmail($e){
        $this->email = $e;
    }
    public function getEmail(){
        return $this->email;
    }
    
    //senha:
    public function setSenha($s){
        $this->senha = $s;
    }
    
    //nome:
    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;
    }



}
?>