<?php

$autor = addslashes($_POST["autor"]);// addslashes() -> através de aplicação de uma '\' será barra qualquer inserção ilicítaa com a finalidade de prejudicar o sistema;     'or 1=1' -> siulação de erro

$sql = "SELECT * FROM posts WHERE autor = '' or '1=1'";

?>