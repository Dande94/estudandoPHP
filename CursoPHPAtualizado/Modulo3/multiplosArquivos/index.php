<?php
// Tempo de espera em segundos
$tempoEspera = 2;


//require : em case de erro, exibe o erro,ele trava todo o script;
//include : em case de erro, exibe o erro e o restante do script é executado;
//_once : impede que um arquivo repita a requisição, aplicado ao require e ao include;Ex: require_once | include_once;
// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");
require('config.php'); 
require('header.php'); 
echo "Conteudo do SITE";
echo '<br>';
echo "User: ".$user;
?>
