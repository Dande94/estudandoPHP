<?php
class Calculadora{
    private $n;//valor que sofrerá as operações, somente utilizavel dentro da própria classe;

    public function __construct($numeroInicial){//atribuindo valor passado no instaciamento para dentro da variavel $n;
        $this->n = $numeroInicial;//a variavel 'n' se tornará um valor padrão em todos os calcúlos;
    }

    //operações matemáticas
    public function somar($n1){
        $this->n += $n1;
        return $this;//retorna o próprio objeto;
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
        return $this->n;// retorna o resultado;
    }

}

$calc = new Calculadora(12);//numero que irá pra dentro do construtor, e assim se tornando padrão no funcionamento da classe;

// $calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
// $resultado = $calc->resultado();
// echo "O resultado: ".$resultado;
echo "<br>";
$calc->somar(2)->subtrair(8)->somar(5)->multiplicar(2);// os parametros na chamdas das funções servem como o numero que irá aplicar a alteração no numero inicial; (funções aninhadas)
$resultado = $calc->resultado();
echo "O resultado: ".$resultado;


?>