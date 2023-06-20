<?php
//no php o polimorfismo uma função é sobreescrita pra mais próxima da classe que herda algo da classe pai;
//mo exemplo abaixo ele usou o mesmo nome pra as funções que competem a preferencia de execução;

class Animal{
    public function getNome(){
        echo "getNome da classe Animal";
    }

    public function testar(){
        echo "testagem";
    }
}

class Cachorro extends Animal{

    // public function getNome(){
    //     echo "getNome da classe Cachorro";
    // }

    public function getNome(){
        $this->testar();
    }
}

$cachorro = new Cachorro();
$cachorro->getNome();


//segundo bonieky polimorfimo é quando substituo uma função herdada pela função próprio objeto;
?>