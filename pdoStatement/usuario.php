<?php

class Usuario{

    private $db;//variavél privada;

    public function __construct(){
        //try catch, para tratar conexão e falha de conexão;
        try{
            //conexão com op banco de dados via PDO;
            $this->db = new PDO("mysql:dbname=blog3;host=localhost","root","");
        }catch(PDOException $e){
            echo "FALHA: ".$e->getMessage();
        }
    }

    public function selecionar($id){
        //o comando:
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
        //tratamento da variavel:
        $sql->bindValue(":id", $id);
        //executar o comando
        $sql->execute();

        //construção do resultado;
        $array = array();//declarando array vazio para receber resultado da busca;
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;
    }
}

?>