<?php
$image = "youtube-play-icone-1.png";
$mini_image = "mini_imagem.png";

list($width_original, $height_original) = getimagesize($image);
list($width_mini, $height_mini) = getimagesize($mini_image);
$image_final = imagecreatetruecolor($width_original, $height_original);//habilita o uso de imagem com cores e especificar as dimensões;

//creadores do espaço ode serão alocados as imagens
$image_original = imagecreatefrompng($image);
$image_mini = imagecreatefrompng($mini_image);

//no imagecopy() - 1º é o espaço criado para comportar a imagem, 2º a imagem a ser comportada, 3º e 4º as posições X e Y no navegador, 5º e 6º posição dentro da própria imagem, 7º e 8º largura e altura da imagem capturadas no list;

imagecopy($image_final, $image_original, 0,0,0,0, $width_original, $height_original);//usase a mesma construção do imagecopyresampled(); essa função contrói a imagem;

imagecopy($image_final, $image_mini, 1800,1250,0,0, $width_mini, $height_mini);//contruir a mini imagem que será usda como marca d'agua:

header("Content-Type: image/png");//transforma a página web em página de image web
imagepng($image_final,null);//mostra a imagem no navegador
//imagepng($image_final,"imagem_marca_dagua.png");//mostra a imagem no navegador

?>