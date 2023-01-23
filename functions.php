<?php
$conta =0;
function somarNumero( $x ,$y ){
    $conta = $x + $y;
    return $conta;
};
//simplificando
function somarNumero2( $x ,$y ){
    return $x + $y;
};

$resultado = somarNumero(10,20);
$resultado2 = somarNumero2(30,20);


echo "resultado: ".$resultado;
echo "<br/>";
echo "resultado: ".$resultado2;
//-------------------------------
function mostrarNome(){
    return "Anderson Nunes";
};
$nome = mostrarNome();
echo "<br/>";
echo "Meu nome é: ".$nome;

?>