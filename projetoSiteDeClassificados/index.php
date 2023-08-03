<?php require_once 'pages/header.php'; ?>
<?php
require_once "classes/anuncios.class.php";
require_once 'classes/usuario.class.php';
$a = new Anuncios();
$u = new Usuario();

$total_anuncios = $a->getTotalAnuncios();
$total_usuarios = $u->getTotalUsuarios();

?>

<div class="container card text-bg-light my-3">
    <div class="card-body text-align-center">
        <h1 class="card-title">Nós temos hoje <?php echo $total_anuncios;?> anúncios</h1>
        <p class="card-text">E mais de <?php echo $total_usuarios;?> usuários cadastrados!</p>
    </div>
</div>
<div class="row mx-2">
    <div class="col-sm-4">
        <h5>Busca avançada</h5>
    </div>
    <div class="col-sm-8">
        <h5>Últimos Anúncios</h5>
    </div>
</div>
<?php require_once 'pages/footer.php'; ?>