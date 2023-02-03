<?php
$nomes = array("Rafael", "Ricardo", "Rosa", "Rebeca", "Renato", "Rafael", "Ricardo", "Roberto", "Rosa", "Raissa", "Rafael", "Ricardo", "Rafaela", "Ricardo", "Rafael", "Ricardo", "Rafael", "Ricardo", "Rafael", "Ricardo");
print_r($nomes);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$nomesSemRepeticao = array_unique($nomes);

print_r($nomesSemRepeticao);