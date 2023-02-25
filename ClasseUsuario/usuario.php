<?php
class Usuario{
    private $id;
    private $email;
    private $senha;
    private $nome;

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