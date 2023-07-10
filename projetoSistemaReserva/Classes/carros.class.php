<?php

class Carros{
    private $pdo;

    public function __construct($pdo)//salvando a conexão dentro da classe;
    {
        $this->pdo = $pdo;
    }
}

?>