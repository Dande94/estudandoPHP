<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

$idade1 = 40;
$idade2 = 16;

//if($idade1 >= 18){echo 'De maior!';}else{echo 'De menor!';};
echo ($idade1 >= 18) ? 'De maior!':'De menor!';//ternário
echo '<br>';
//if($idade2 >= 18){echo 'De maior!';}else{echo 'De menor!';}
echo ($idade1 <= 18) ? 'De maior!':'De menor!';//ternário
/**
 * X < Y 
 * X > Y
 *  
 * X == Y
 * X === Y (operador de identidade);
 * X != Y
 * 
 * X >= Y
 * X <= Y
 */


?>