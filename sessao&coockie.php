<?php
//armazenar informações no servidor;
//PHP cria cookies e sessões o JS apenas cookies;
// session_start();//lemba de sempre colocar na primeira linha do PHP, pois se declarar algo antes, pode dar ero no PHP;
//sessão
// $_SESSION["teste"] = "Anderson Nunes";
// echo "Sessão foi feita...";

// echo "Meu nome é: ".$_SESSION["teste"];

//cookie
setcookie("meusteste", "Fulano de tal", time()+3600);//1º parametro identificação do cookie, 2º parametro o que terá nele(o valor), 3º parametro tempo de vida;
echo "Coookie setado com sucesso";
echo "<br>";
echo "Meu cookie é de: ".$_COOKIE["meusteste"];

?>