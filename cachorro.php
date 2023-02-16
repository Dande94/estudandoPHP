<?php
class Cachorro{
    public function latir(){
        echo " au au";
    }
}

$rex = new Cachorro();//instanciando a classe 
$rex->latir();// acessando a função dentro da classe;

$fido = new Cachorro(); 
$fido->latir();

// Cachorro::latir();//executando a classe de modo indefinido, possível apenas para acessos publicos, objeto não manuseavél; para funcionar aplicar o static; não aconselhavél

?>