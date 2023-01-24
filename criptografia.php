<?php

$nome = "Anderson";
// $nome2 =md5($nome);//irreversível, mais usado;
$nome2 =base64_encode($nome);//reversivel, fragil;base64_decode() -> descriptografar;

echo $nome;
echo "<br>";
echo $nome2;


?>