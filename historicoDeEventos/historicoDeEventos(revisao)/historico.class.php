<?php
class Historico{

    private $pdo;

    public function __construct(){
        try{
            $this->pdo = new PDO("mysql:dbname=historico_eventos;host=127.0.0.1","root","");
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function registrar($acao){
        $ip = $_SERVER['REMOTE_ADDR'];

        $sql = "INSERT INTO historico SET ip = :ip, data_acao = NOW(), acao = :acao";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":ip", $ip);
        $sql->bindValue(":acao", $acao);
        $sql->execute();
    }

}
?>