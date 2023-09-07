<?php 
//crop imagens co lib GD

//$arquivo = 'paisagem.jpg';
$arquivo = 'retrato.jpg';

$width = 500;
$heigth = 500;

list($originalWidth, $originalHeigth) = getimagesize($arquivo);


$ratio = $originalWidth / $originalHeigth;
$ratioDest = $width / $heigth;

$finalWidth = 0;
$finalHeigth = 0;
$finalX = 0;
$finalY = 0;

if($ratioDest > $ratio){
    $finalWidth = $heigth * $ratio;
    $finalHeigth = $heigth; 
}else{
    $finalHeigth = $width / $ratio;
    $finalWidth = $width;
}

//________________________________ calculo do crop;
if($finalWidth < $width){
    $finalWidth = $width;
    $finalHeigth = $width / $ratio;

    $finalY = -(($finalHeigth - $heigth) / 2);//centralizar o crop retrato
}else{
    $finalHeigth = $heigth;
    $finalWidth = $heigth * $ratio;

    $finalX = -(($finalWidth - $width) / 2);//centralizar o crop paisagem
}


$imagem = imagecreatetruecolor($width, $heigth);

$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem,
    $originalImg,
    $finalX,$finalY,0,0,
    $finalWidth, $finalHeigth,
    $originalWidth,$originalHeigth
);

//exibir
header("Content-Type: image/jpeg");
imagejpeg($imagem, null, 100);
// imagejpeg($imagem, 'nova_imagem.jpg', 100);

?>