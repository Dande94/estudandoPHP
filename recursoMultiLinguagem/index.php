<?php
session_start();// o idioma será salvo na sessão;
require "Language.class.php";
 $lang = new Language();

 //verificar o envio do lang
    if(!empty($_GET['lang']));
?>
<!-- botões para indexar o idioma -->
<a href="index.php?lang=en">English</a>
<a href="index.php?lang=pt-br">Português</a>
<a href="index.php?lang=es">Español</a>
<hr>

 <button><?php echo $lang->get('BUY') ?></button>