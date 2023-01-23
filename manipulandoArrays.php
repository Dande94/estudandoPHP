<?php

$array = array(
    "nome" => "Anderson",
    "idade" => 28,
    "cidade" => "Joiville",
    "país" => "Brasil",
    "ativo" => true
);

$array2 = array_keys($array);//cria um novo array com as chaves do objeto
$array3 = array_values($array);//cria um novo array com os valores do objeto
print_r( $array2);
echo "<br>";
print_r( $array3);
echo "<br>";

asort($array);//ordena por ordem alfabética baseada os valores; porém mantém a relação indice e valores;
print_r( $array);
echo "<br>";
arsort($array);// ordem alfabética reversa;
print_r( $array);
echo "<br>";

//array_pop($array);//remove o ultimo item do array;
//print_r( $array);
//echo "<br>";
//array_shift($array);//remove o primeiro item do array;
//print_r( $array);

$array4 = array(
    "Anderson",
    "Gisele",
    "Isabel",
    "Andrey"
);
print_r( $array4);
echo "total de alunos: ".count($array4);//similar ao lenght, conta quantos elementos tem dentro do array, iniciando em 1;
echo "<br>";

if(in_array("Anderson", $array4)){//in_array() verifica se existe aquele valor dentro do array;
    echo "Vendedor foi Anderson";
}
echo "<br>";



?>