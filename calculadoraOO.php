<?php
class Calculadora{
    private $n;//valor que sofrerá as opeções;

    public function __construct($numeroInicial){//atribuindo valor passado no instaciamento para dentro da variavel $n;
        $this->n = $numeroInicial;
    }

    //operações matemáticas
    public function somar($n1){
        $this->n += $n1;
        return $this;
    }
    public function subtrair($n1){
        $this->n -= $n1;
        return $this;
    }
    public function multiplicar($n1){
        $this->n *= $n1;
        return $this;
    }
    public function dividir($n1){
        $this->n /= $n1;
        return $this;
    }
    //resultado
    public function resultado(){
        return $this->n;
    }

}

$calc = new Calculadora(10);
// $calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
// $resultado = $calc->resultado();
// echo "O resultado: ".$resultado;
echo "<br>";
$calc->somar(2)->somar(3)->somar(5)->somar(2);
$resultado = $calc->resultado();
echo "O resultado: ".$resultado;


?>