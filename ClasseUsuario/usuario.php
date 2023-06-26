<?php

class Usuario{
    //propriedades da classe;
    private $id;
    private $email;
    private $senha;
    private $nome;

    private $pdo;

    public function __construct($i=''){//construtor, passar argumento com opcional vazio, onde depois haverá verificação se está vazia para tomada de decisão do que fazer com ela;
        try{
            $this->pdo = new PDO("mysql:dbname=blog2;host=localhost","root","");
        }catch(PDOException $e){
            echo "FALHA: ".$e->getMessage();
        }
        if(!empty($i)){//se a variavel não esiver vazia
            $sql = "SELECT *  FROM usuarios WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($i));
            
            if($sql->rowCount() > 0){
                $data = $sql->fetch();
                //é usado o 'this' na construção das variaveis, para manter a coêrencia de que as variaveis que estão recebendo o dados são de dentro da propria classe e estão privadas;
                $this->id=$data['id'];
                $this->nome=$data['nome'];
                $this->email=$data['email'];
                $this->senha=$data['senha'];
            }
        }
    }
    
    //metodos getter e setter:
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
                $this->id
            ));
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
                $this->nome
            ));
        }
    }
    public function delete(){
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $sql = $this->pdo->prepare($sql);
        $sql->execute(array($this->id));
    }
}
?>