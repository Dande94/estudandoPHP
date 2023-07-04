<?php
session_start();
$n = rand(1000,9999);
$_SESSION['captcha'] = $n;
// echo $n;

?>
<!-- endereçar a tag img para um aruivo php onde o mesmo irá gerar uma imagem usando a lib PHP GD -->
<img src="imagem.php" width="100" height="50" alt="">