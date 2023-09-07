<?php 
//redimensionar imagens co lib GD

$arquivo = 'paisagem.jpg';// o nome e localização da imagem;
//$arquivo = 'retrato.jpg';// o nome e localização da imagem;

//largura e Altura máxima que a imagem terá;
$maxWidth = 500;
$maxHeigth = 500;

//como encontrar os tamanhos da imagem;
//$info = getimagesize($arquivo);
//print_r($info);// => Array ( [0] => 2400 [1] => 1600 [2] => 2 [3] => width="2400" height="1600" [bits] => 8 [channels] => 3 [mime] => image/jpeg )

//desconstruindo o array para pegar os tamanhos da imagem
list($originalWidth, $originalHeigth) = getimagesize($arquivo);//metodo list() irá pegar o array retornado de getimagesize() e vai desconstruir as infirmações em variavéis;


//Cálculos de proporcionalidade da imagem para identificação de imagem landscape ou Portrait;
$ratio = $originalWidth / $originalHeigth;//proporção orginal da imagem
$ratioDest = $maxWidth / $maxHeigth;//proporção das imagens no tamanho máximo;

$finalWidth = 0;
$finalHeigth = 0;

//identificar se é retrato ou paisagem | redimensionar a imagem:
if($ratioDest > $ratio){
    //proporcionalizar a Largura
    $finalWidth = $maxHeigth * $ratio;
    //Altura recebe  valor máximo da redução
    $finalHeigth = $maxHeigth; 
}else{
    //proporcionalizar a Altura
    $finalHeigth = $maxWidth / $ratio;
    //Largura recebe valor máximo da redução
    $finalWidth = $maxWidth;
}
/*
echo $ratio;
echo "<br>";
echo $ratioDest;
echo "<br>";
echo $finalWidth;
echo "<br>";
echo $finalHeigth;
echo "<br>";
*/

//criando as dimensões da imagem:
$imagem = imagecreatetruecolor($finalWidth, $finalHeigth);
//ler a imagem;
$originalImg = imagecreatefromjpeg($arquivo);

//cópiar a imagem pra um novo padrão
imagecopyresampled(
    $imagem,//espaço onde será copiada a imagem;
    $originalImg,// qual imagem desejo copiar;
    0,0,0,0,//posições final e posições original | X e Y
    $finalWidth, $finalHeigth,//dimensões finais da imagem;
    $originalWidth,$originalHeigth//dimensões originais da imagem;
);

//exibir
//header("Content-Type: image/jpeg");
//imagejpeg($imagem, null, 100);
imagejpeg($imagem, 'nova_imagem.jpg', 100);

?>
<!-- 
    
A função imagecopyresampled() é uma função da biblioteca GD (Graphics Draw) do PHP que é usada para redimensionar e copiar partes de uma imagem para outra, aplicando uma interpolação de alta qualidade para criar uma imagem redimensionada com aparência suave.

Aqui está uma descrição dos principais parâmetros da função:

dst_image: A imagem de destino (onde a imagem resultante será copiada).

src_image: A imagem de origem (a partir da qual você deseja copiar e redimensionar partes).

dst_x e dst_y: As coordenadas X e Y na imagem de destino onde a parte da imagem de origem será colocada.

src_x e src_y: As coordenadas X e Y na imagem de origem a partir das quais você deseja copiar a parte.

dst_w e dst_h: A largura e altura da parte da imagem de destino.

src_w e src_h: A largura e altura da parte da imagem de origem que você deseja copiar

A função imagecopyresampled() é muito útil quando você precisa redimensionar imagens para diferentes tamanhos ou criar miniaturas de imagens, mantendo uma boa qualidade na imagem resultante.

 -->