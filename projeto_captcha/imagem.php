<?php
session_start();
header("Contet-type: image/jpeg");//comando que transforma a estrutura do arquivo php em arquivo de imagem;
$n = $_SESSION['captcha'];

$imagem = imagecreate(100,50);//criador de imagem do PHP GD, largua e altura;
imagecolorallocate($imagem, 200,200,200);/*
*é usada para alocar uma cor em uma imagem ou paleta de cores.

*Ela retorna um identificador de cor que pode ser usado para definir a cor de pixels, linhas, preenchimentos e outros elementos gráficos em uma     imagem.

*A função aceita quatro parâmetros:
image: É o identificador da imagem criado com a função imagecreate() ou imagecreatetruecolor().
red: O valor da cor vermelha (0-255).
green: O valor da cor verde (0-255).
blue: O valor da cor azul (0-255).
*/

$fontcolor= imagecolorallocate($imagem, 20,20,20);//gerar uma cor para aplicar na font;

imagettftext($imagem, 40, 0, 20, 30, $fontcolor,'Ginga.otf', $n);/*
gerador de texto em imagens:
1º Param - onde será inserido;
2º Param - tamanho da font;
3º Param -  O ângulo de inclinação do texto em graus;
4º Param - distancia horizontal;
5º Param - distancia vertical; 
6º Param - cor da font;
7º Param - tipo da font;
8º Param - o que será inserido;
*/



imagejpeg($imagem, null, 100);//é usada para criar uma imagem JPEG a partir de uma imagem existente. 1º param(o que será convertido),2º param qual será o nome no arquivo convertido(nesse caso está null, pq não está convertendo algo apenas gerando um jpeg), 3ºparam(qualidade da imagem);




?>