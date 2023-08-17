<?php
// $array = [1,2,3];
//criar arrays
// $array = range(1,20);//criar array com 3 parametros, 1º onde inicia, 2º onde termina, 3º o passo desa numeração(aceita floats);
// $array = range(1,20,2); 3º o passo desa numeração(aceita floats);
// $array = range(50,1);//descrecente
// $array = range(50,1,2);//descrecente com passo;
// $array = range(20,50);//uma secção de valores
// $array = range(20,50,2);//uma secção de valores com passo;
$array = range('a','g');//possivel com letras também, em todos os aspectos anteriores;



foreach($array as $item){
    echo "{$item} <br>";
}