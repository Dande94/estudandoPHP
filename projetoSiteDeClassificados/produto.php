<?php require_once 'pages/header.php'; ?>
<?php
require_once "classes/anuncios.class.php";
require_once 'classes/usuario.class.php';
$a = new Anuncios();
$u = new Usuario();
if (isset($_GET['id']) &&  !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);
} else {
?>
    <script type="text/javascript">
        window.location.href = "index.php"
    </script>
<?php
    exit;
}
$info = $a->getAnuncio($id);
?>
<div class="container my-3">
    <div class="row mx-2">
        <div class="col-sm-5">
            <div id="carouselExample" class="carousel slide carousel-dark slide">
                <div class="carousel-inner">
                    <?php foreach ($info['fotos'] as $chave => $foto) : ?>
                        <div class="carousel-item <?php echo ($chave == 0)?'active':'';?>">
                            <img src="assets/images/anuncios/<?php echo $foto['url']?>" class="w-100">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <div class="col-sm-7">
            <h1>
            <?php echo $info['titulo'] ;?>
            </h1>
            <h4>
                Categoria: <?php echo $info['categoria'] ;?>
            </h4>
            <p>
                Descrição: <?php echo $info['descricao'] ;?>
            </p>
            <br>
            <h3>
                R$ <?php echo number_format($info['preco'],2) ?>
            </h3>
            <br>
            <br>
            <h4>Vendedor: <?php echo $info['nome'] ;?></h4>
            <h4>Telefone: <?php echo $info['telefone'] ;?></h4>
        </div>
    </div>
</div>
<?php require_once 'pages/footer.php'; ?>