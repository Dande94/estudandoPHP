<?php
session_start();
unset($_SESSION['logado']);//destrói a variável e a torna inacessível;
header("Location: index.php");
exit;
?>