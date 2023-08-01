<?php require_once 'pages/header.php';?>
<?php
if(empty($_SESSION['cLogin'])){
    ?>
        <script type="text/javascript">window.location.href="login.php"</script>
    <?php
    exit;
}
?>
<main class="container">
    <h2>Meus Anúncios</h2> 
    <a href="addAnuncio.php" class="btn btn-outline-dark">Adicionar Anúncio</a>
    <table class="table table-striped">
        <thead>
            <th>Foto</th>
            <th>Título</th>
            <th>Preço</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php
            require_once 'classes/anuncios.class.php';
            $a = new Anuncios();
            $anuncios = $a->getMeusAnuncios();
            foreach($anuncios as $anuncio):
            ?>
                <tr>
                    <td>
                        <?php if(!empty($anuncio['url'])):?>
                            <img src="assets/images/anuncios/<?php echo $anuncio['url'];?>" border="0" height="50" alt="">
                        <?php else:?>
                            <img src="assets/images/default.jpg" height="50" alt="">
                        <?php endif;?>
                    </td>
                    <td>
                        <?php echo $anuncio['titulo']; ?>
                    </td>
                    <td>
                        R$ <?php echo number_format($anuncio['preco'],2) ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-secondary" href="editarAnuncio.php?id=<?php echo $anuncio['id']?>">Editar</a>
                        <a class="btn btn-outline-danger" href="excluirAnuncio.php?id=<?php echo $anuncio['id']?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>


<?php require_once 'pages/header.php'; ?>