<?php
require_once "usuario.php";
$u = new Usuario();
$res = $u->selecionar(40);
print_r($res);

?>