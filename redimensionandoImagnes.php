<?php
$filename = "youtube-play-icone-1.png";
$width=200;
$height=200;

list($width_original,$height_original) = getimagesize($filename);
//a função getimagesize() - pega as informações da dimenção da imagem, retornando como um array;
//função que permite atribuir os valores de uma array a variáveis. Ela aceita uma array como argumento e retorna as variáveis correspondentes aos elementos da array, na ordem em que eles aparecem.
// echo $width_original;
// echo "<br>";
// echo $height_original;

$ratio = $width_original / $height_original;// uma proporação entre largura e altua pra usar como base para recalcular redimensionamento;
// echo $ratio;

if($width / $height > $ratio){
    $width = $height * $ratio;
}else{
    $height = $width / $ratio;
}
// echo "largura: ".$width." - Altura: ".$height;
$image_final = imagecreatetruecolor($width,$height);//criar uma imagem no php, os parametros estabelecem as dimensões
$image_original = imagecreatefrompng($filename);//traz a imagem pra dentro do php;
imagecopyresampled($image_final, $image_original,0,0,0,0,$width,$height,$width_original,$height_original);
//mosta a imagem nova 1º o espaço criado para a image, 2º a imagem que trazida pra dentro do php,3º posição X na página, 4º posição posição Y na página, 5º posição X na imagem, 6º posição Y na imagem, 7º largura nova, 8º altura nova, 9º largura orginal da imagem, 10º altura orginal da imagem;

header("Content-Type: image/png");
imagepng($image_final, null);//função para exibir a imagem, 1º a imagem a ser exibida, 2º diretório ondserá salvo, como não será salvo setamos 'null', jpeg tem 3º parametro que a qualidade, pgn sala tudo com 100%;
//imagejpeg($image_final, "mini_imagem.png");//salvando a imagem no mesmo local do onde o arquivo está sendo processado;
?>