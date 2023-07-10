<?php

class Reservas{

    private $pdo;

    public function __construct($pdo)//salvando a conexão dentro da classe;
    {
        $this->pdo = $pdo;
    }

    public function getReservas(){//irá listar as reservas que tem no DB;
        $array = array(); //normalmente não declaro array vazia se logo vai ser preenchida, mas no projeto caso não há registro retorno um array vazio;

        $sql = "SELECT * FROM reservas";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0){//se tiver registro preencherá o array(a função que faz isso e fetchAll())
            $array = $sql->fetchAll();
        }//se não tiver nada retorna vázio;

        return $array;//apenas retorna o array, vazio ou não;

    }
}

?>