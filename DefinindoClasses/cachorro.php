<?php
class Cachorro{
    public function latir(){
        echo " au au";
    }

    public $nome;
    private $idade;

}

// $rex = new Cachorro();//instanciando a classe 
// $rex->latir();// acessando a função dentro da classe;

//--outro cachorro usando as mesma carteristicas;
// $fido = new Cachorro(); 
// $fido->latir();

// Cachorro::latir();//executando a classe de modo indefinido, possível apenas para acessos publicos, objeto não manuseavél; para funcionar aplicar o static; não aconselhavél;

$cachorro = new Cachorro();
$cachorro->nome="Rex"; // definindo o nome;

echo"O nome do cão é ".$cachorro->nome;

?>