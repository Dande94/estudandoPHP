<?php
//exemplo com RPG
class Status{
    public $nome;
    private $idade;
    private $especie;
    private $defesa;
    private $saude;
}
class Guerreiro extends Status{
    private $montaria;
    private $arma;
}
class Mago extends Status{
    private $magias;
    private $livros;
}
class Elfo extends Status{
    private $arma;
    private $carga;
    private $magias;
}

$guerreiro =  new Guerreiro();
$guerreiro->nome="Alastor";
echo "O nome do guerreiro é: ".$guerreiro->nome;

?>
 