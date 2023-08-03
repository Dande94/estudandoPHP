<?php require_once 'pages/header.php'; ?>
<?php
require_once "classes/anuncios.class.php";
require_once 'classes/usuario.class.php';
$a = new Anuncios();
$u = new Usuario();

$total_anuncios = $a->getTotalAnuncios();
$total_usuarios = $u->getTotalUsuarios();
$ultimos_anuncios = $a->getUltimosAnuncios();

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
        <table class="table table-striped">
            <tbody>
                <?php foreach($ultimos_anuncios as $anuncio):?>
                    <tr>
                        <td>
                            <?php if(!empty($anuncio['url'])):?>
                                <img src="assets/images/anuncios/<?php echo $anuncio['url'];?>" border="0" height="50" alt="">
                            <?php else:?>
                                <img src="assets/images/default.jpg" height="50" alt="">
                            <?php endif;?>
                        </td>
                        <td>
                            <a href="produto.php?id=<?php echo $anuncio['id']?>"><?php echo $anuncio['titulo']?></a><br>
                            <?php echo $anuncio['categoria']?>
                        </td>
                        <td>
                            R$ <?php echo number_format($anuncio['preco'],2) ?>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'pages/footer.php'; ?>