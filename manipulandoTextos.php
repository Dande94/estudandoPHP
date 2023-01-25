<?php

$nome = "Isabel Maria Fayel Nunes";

$x = explode(" ", $nome);//função explode basicamente separa a string e transforma em 1 array, aqui por exemplo no 1º parametros onde tiver " " é onde ocorrerá o corte, no 2º parametro é onde se encontra a string;

print_r($x);//Array ( [0] => Isabel [1] => Maria [2] => Fayel [3] => Nunes )
echo "<br>";
$nomeCompleto = implode(" ", $x);//faz o contrário do explode junta o array numa string, usando a mesma lógica nos parametros;
echo $nomeCompleto;
echo "<br>";

$y = number_format(34989.12123,3,",",".");//formatar numeros, 1º pamametro o numero a ser formatado, 2º parametro quantdade de casas decimais, 3º parametro pontação para decimal, 4º parametro pontuação para milhar;
echo $y;
echo "<br>";

$texto = "O rato roeu a roupa!";
echo $texto;
echo "<br>";
$string = str_replace("roeu", "comeu", $texto);//função de trocar string, 1º parametro a palavra a ser trocada, 2º parametros o que deve substituir, 3º em qual string;
echo $string;
echo "<br>";

echo strtolower("ANDERSON NUNES");//transformar em minuscula;
echo "<br>";
echo strtoupper("anderson nunes");//transformar em maiúscula;
echo "<br>";

$u = substr($nome, -24,-1);//fatiar uma string ou selecionar intervalos, 1º parametro a string, 2º parametro onde inicia o corte, 3º parametro onde termina o corte; com numeros negativos pode se começar pelo final da string;, a lógica també inverte, o valo mais londe do zero tem que ir no parametro de inicio, 
echo $u;
echo "<br>";

$nomeMinusculo = "anderson nunes";
echo ucfirst($nomeMinusculo);// primeira letra maiuscula da string
echo "<br>";
echo ucwords($nomeMinusculo);// primeira letra maiuscula de todas as palavras da string
echo "<br>";


?>