<?php
session_start();// o idioma será salvo na sessão;

//verificar o envio do lang
if(!empty($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];//capturando a lang passada via url, e setando na session;
}

require "Language.class.php";
 $lang = new Language();

?>
<!-- botões para indexar o idioma -->
<a href="index.php?lang=en">English</a>
<a href="index.php?lang=pt-br">Português</a>
<a href="index.php?lang=es">Español</a>
<hr>
Linguagem Definida:<?php echo $lang->getLanguage(); ?> 
<hr>

 <button><?php echo $lang->get('BUY');?></button>