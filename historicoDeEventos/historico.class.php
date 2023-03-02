<?php
class  Historico {
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
        //A função $_SERVER['REMOTE_ADDR'] retorna o endereço IP do cliente que está acessando o servidor web. É útil para obter informações sobre o endereço IP do usuário, por exemplo, para fins de rastreamento ou para personalizar a experiência do usuário com base na localização geográfica.

        $sql = "INSERT INTO historico SET ip = :ip, data_acao = NOW(), acao = :acao";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':ip',$ip);
        $sql->bindValue(':acao',$acao);
        $sql->execute();
    }
}
