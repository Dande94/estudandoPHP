<?php

//conceito de pasta imaginária(acredito particulamente que pra introdução do assunto mvc);

require 'Sobre1.php';
require 'Sobre2.php';

$sobre = new \aplicacao\v2\Sobre();

echo "Versão: ".$sobre->getVersao();

// O namespace é um recurso do PHP que permite organizar classes, funções, constantes e outros elementos dentro de um contexto lógico específico, evitando conflitos de nome com outros elementos definidos em outras partes do código. Com o uso de namespaces, é possível definir elementos com o mesmo nome em diferentes partes do código sem que haja conflitos.

// Um exemplo de uso de namespaces é a definição de classes com o mesmo nome em diferentes bibliotecas. Sem namespaces, as classes teriam o mesmo nome e entrariam em conflito. Com o uso de namespaces, é possível definir um contexto lógico específico para cada classe, evitando conflitos e permitindo que as classes sejam usadas sem problemas.





//versão chatgpt
// No PHP, namespaces são definidos usando a palavra-chave namespace. Por exemplo, o código abaixo define um namespace MinhaApp e uma classe MinhaClasse dentro desse namespace:
// namespace MinhaApp;

// class MinhaClasse {
//     // ...
// }
//em outra pasta
// use MinhaApp\MinhaClasse;

// $obj = new MinhaClasse();


?>