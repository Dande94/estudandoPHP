<?php 
require_once "models/Usuario.php";// não usado '../' como retorno de diretório pq será importado no index que está na mesma hierarquia que o diretório models;

class UsuarioDaoMysql implements UsuarioDAO{
     private $pdo;

     public function __construct(PDO $driver)//recebendo a conexão pdo lá do index;
     {
        $this->pdo = $driver;//conexão com o banco vinda do require_once 'config.php' no index.php
     }

    public function add(Usuario $u){

    }

    public function findAll(){
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM usuarios");

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($data as $item){
                //criar um objeto, preencher ele e joga no array;
                $u = new Usuario();
                $u->setId($item['id']);
                $u->setNome($item['nome']);
                $u->setEmail($item['email']);
                $array[] = $u;
            }
        }
        return $array; 
    }

    public function findById($id){

    }

    public function update(Usuario $u){

    }
    
    public function delete($id){

    }
}
?>