<?php 

//lib GD 2

$imagem = imagecreatetruecolor(300,300);//criar uma imagem do nada | 2 param, 1º largura, 2º altura;

$cor = imagecolorallocate($imagem, 200,150,0);// criar cor | 2 param, 1º a imagem criada, 2º(cores RGB) red, green, blue;

imagefill($imagem, 0,0,$cor);//preencher essa imagem | 4 param, 1º a própria imagem, 2º posição onde irá começar a imagem(da esquerda pra direita), 3º posição onde irá começar a imagem(de cima pra baixo) ,4º a cor que irá preencher;

header("Content-Type: image/jpeg");//exibir a imagem na tela | faz com que o navegador interprete o conteudo como imagem | transformando o arquivo em imagem | para usar essa técnica não pode ter nada sendo exibido na tela antes;

//header("Content-Type: image/png");//exibir imagem png;


//imagejpeg($imagem); //gera a imagem de fato; nesse caso na extensão jpeg | 3 param, 1º a imagem, 2º onde salvar, porém ao colocar null ou deixa em branco, a imagem é apenas exibida na tela, mas caso tenha um caminho/diretório aiserá salva, 3º a qualidade da imagem (0 até 100);

//imagejpeg($imagem, null, 100);//modelo preenchendo todas os parametros;

imagejpeg($imagem, 'nova_imagem.jpeg', 100);//modelo preenchendo todas os parametros e salvando a imagem;
imagepng($imagem, 'nova_imagem.png');//modelo png, * png não tem qualidade;



//para exibir na tela a imagem o null tem qu estar ativado;

?>