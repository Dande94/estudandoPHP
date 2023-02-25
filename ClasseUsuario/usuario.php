<?php

class Usuario{
    private $id;
    private $email;
    private $senha;
    private $nome;

    private $pdo;

    public function __construct($i=''){//construtor, passar argumento com opcional vazio;
        try{
            $this->pdo = new PDO("mysql:dbname=blog2;host=localhost","root","");
        }catch(PDOException $e){
            echo "FALHA: ".$e->getMessage();
        }
        if(!empty($i)){
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
        $this->senha = sha1($s);
    }
    
    //nome:
    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;
    }

    //salvar:
    public function salvar(){//caso a varivel venha com algum valor irá fazer update, caso está vazia então irá registrar um novo usuario;
        if(!empty($this->id)){//verificador de variavel vazia;
            //update
            $sql = "UPDATE usuarios SET
            email = ?,
            senha = ?,
            nome = ?
            WHERE id =?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array(
            $this->email,
            $this->senha,
            $this->nome,
            $this->id));
        }else{
            //registro
            $sql = "INSERT INTO usuarios SET
            email = ?,
            senha = ?,
            nome = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array(
            $this->email,
            $this->senha,
            $this->nome));
        }
    }

}
?>