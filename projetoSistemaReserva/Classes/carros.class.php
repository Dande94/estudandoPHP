<?php

class Carros{
    private $pdo;

    public function __construct($pdo)//salvando a conexão dentro da classe;
    {
        $this->pdo = $pdo;
    }
    public function getCarros(){
        $array = array();
            $sql = "SELECT * FROM carros";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

        return $array;
    }
}

?>