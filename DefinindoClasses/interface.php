<?php
//interface obriga as classes em que ela está implementada a ter seus metodos;

//todo o metodo da interface tem que ser publico, aceita parametros;
interface Habilidades{
    public function Atacar();
    //public function Atacar($x ,$y);//exemplo com parametros
}
interface Mover{
    public function Correr();
}

//as classes teram que construir os metodos;
class Guerreiro implements Habilidades{
    public function Atacar(){echo "ataque";}
}
class Mago implements Habilidades, Mover{//passivel de setar mais de uma  interface
    public function Atacar(){return True;}
    public function Correr(){return True;}
}

$guerreiro = new Guerreiro;
$guerreiro->Atacar();

?>