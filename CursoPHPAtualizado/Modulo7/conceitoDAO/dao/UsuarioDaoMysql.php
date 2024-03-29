<?php 
require_once "models/Usuario.php";// não usado '../' como retorno de diretório pq será importado no index que está na mesma hierarquia que o diretório models;

class UsuarioDaoMysql implements UsuarioDAO{
     private $pdo;

     public function __construct(PDO $driver)//recebendo a conexão pdo lá do index;
     //injeção de depêndencia
     {
        $this->pdo = $driver;//conexão com o banco vinda do require_once 'config.php' no index.php
     }

    public function add(Usuario $u){
        $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":nome", $u->getNome());
        $sql->bindValue(":email", $u->getEmail());
        $sql->execute();

        $u->setId($this->pdo->lastInsertId());
        return $u;
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
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();
            $u = new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['nome']);
            $u->setEmail($data['email']);

            return $u;
        }else{
            return false;
        }

    }

    public function findByEmail($email){//aqui irá retorna o próprio objeto ou false;
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() == 0){
            return false;
        }else{
            $data = $sql->fetch();

            $u = new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['nome']);
            $u->setEmail($data['email']);
            //acima foi usado setter's onde as informações foram setadas nas variáveis em private da classe Usuario

            return $u;//retorno do objeto, mas não será usada;
        }

    }

    public function update(Usuario $u){
        $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":nome",$u->getNome());
        $sql->bindValue(":email",$u->getEmail());
        $sql->bindValue(":id",$u->getId());
        $sql->execute();

        return true;
    }
    
    public function delete($id){
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}
?>