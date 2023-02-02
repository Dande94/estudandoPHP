<?php
require "index.php";
$nome = '';
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = $_POST['nome'];
}else{
    // header("Location: index.php");
};
echo "<br><br>";
echo "Olá, ".$nome.", tudo bem?";
?>
