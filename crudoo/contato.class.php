<?php
class Contato{

    private $pdo;//controle de acesso, ao aplicar o private, o $pdo  será apena acessivel dentro da classe Contato;

    public function __construct(){
        //ao usar o '$this' indica que estou usando algo que está dentro da classe;
        $this->pdo = new PDO("mysql:dbname=blog2;host=127.0.0.1","root","");
    }
}


?>