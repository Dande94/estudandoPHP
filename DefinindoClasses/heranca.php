<?php
//exemplo com RPG
abstract class Status{
    public $nome;
    private $idade;
    private $especie;
    private $defesa;
    private $saude;

    abstract protected function atacar();//ao usar uma função abstrata ela deve sempre ter protected, a classe recebe também uma abstract, e isso obriga todos os herdeiros a ter essa função;

    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;
    }

}
class Guerreiro extends Status{
    private $montaria;
    private $arma;
    public function atacar(){
        return true;//aqui usei return qualquer apenas remover a expressão de erro;
    }
}
class Mago extends Status{
    private $magias;
    private $livros;
    public function atacar(){
        return true;
    }
}
class Elfo extends Status{
    private $arma;
    private $carga;
    private $magias;
    public function atacar(){
        return true;
    }
}

$guerreiro =  new Guerreiro();
$guerreiro->setNome("Alastor");
echo "O nome do guerreiro é: ".$guerreiro->getNome();

?>
 