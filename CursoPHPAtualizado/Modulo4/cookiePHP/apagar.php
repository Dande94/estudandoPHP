<?php
setcookie('nome', '', (time()-3600));//para apagar o cookie ele é chamado e setado 1 minutos no passado;

header('Location: index.php');
die;
?>