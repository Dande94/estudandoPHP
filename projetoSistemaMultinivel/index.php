<?php
session_start();
require_once 'conexaoBanco.php';
require_once 'funcoes.php';
// require_once 'atualizar.php';
if(empty($_SESSION['mmnlogin'])){
    header("Location: login.php");
    die;
}

$id = $_SESSION['mmnlogin'];

$sql = 'SELECT
 usuarios.nome,
 patentes.nome as p_nome
FROM usuarios 
LEFT JOIN patentes ON patentes.id = usuarios.patente
WHERE usuarios.id = :id';
$sql = $pdo->prepare($sql);
$sql->bindValue(':id', $id);
$sql->execute();

if($sql->rowCount() > 0){
    $sql = $sql->fetch();
    $nomeUser = $sql['nome'];
    $p_nome = $sql['p_nome'];
}else{
    header("Location: login.php");
    die;
};

$lista = listar($id,$limite);

?>
<h2>Sistema Multinivel</h2>
<h3>Usuario Logado: <?php echo ucwords($nomeUser)." (".$p_nome.")";?></h3>
<a href="cadastro.php">Cadastrar Novo Usuario</a>
<br>
<a href="logout.php">Sair</a>
<br><br>
<h2>Lista de cadastro</h2>

<?php exibir($lista)?>


