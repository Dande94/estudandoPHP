<?php
$nomes = array( "Anderson","Isabel", "Gisele","Andrey"); 

foreach($nomes as $aluno){
    echo "Aluno: ".$aluno."<br/>";
};
echo "________________________________________________________________<br/>";
$nomes2 = array( 
    array("nome" => "Anderson", "idade" => 28),
    array("nome" => "Isabel", "idade" => 2),
    array("nome" => "Gisele", "idade" => 24),
    array("nome" => "Andrey", "idade" => 17)
);
foreach($nomes2 as $aluno){
    echo "Aluno: ".$aluno["nome"]." - idade: ".$aluno["idade"]."<br/>";
}

echo "________________________________________________________________<br/>";
$aluno = array(
    "nome" => "Anderson",
    "idade" => 90,
    "estado" => "SC",
    "pais" => "Brasil"
);

foreach($aluno as $chave => $dado){
    echo $chave." = " .$dado."<br/>";
}

?>