<?php require_once 'pages/header.php';?>
<?php
if(empty($_SESSION['cLogin'])){
    ?>
        <script type="text/javascript">window.location.href="login.php"</script>
    <?php
    exit;
}

require_once "classes/anuncios.class.php";
$a = new Anuncios();
if(isset($_POST['tituloAnuncio']) && !empty($_POST['tituloAnuncio'])){
    $catAnuncio = $_POST['catAnuncio'];
    $tituloAnuncio = $_POST['tituloAnuncio'];
    $descAnuncio = $_POST['descAnuncio'];
    $precoAnuncio = $_POST['precoAnuncio'];
    $estadoAnuncio = $_POST['estadoAnuncio'];

    $a->addAnuncio($catAnuncio, $tituloAnuncio, $descAnuncio, $precoAnuncio, $estadoAnuncio);
    ?>
        <div class="container my-3">
         <div class="alert alert-success" role="alert">Anuncio <strong>cadastrado</strong> com sucesso!</div>
        </div>
    <?php
}

?>
<main class="container">
    <h2>Meus Anúncios - Adicionar Anúncio</h2>
    <form action="" method="POST" enctype="multipart/form-data">
         <div class="mb-3">
            <label class="form-label">Categoria:</label>
            <select name="catAnuncio" id="catAnuncio" class="form-select">
            <?php 
            require_once 'classes/categorias.class.php';
            $c = new Categorias();
            $cats = $c->getLista();
            foreach($cats as $cat):?>
                <option value="<?php echo $cat['id']?>"><?php echo $cat['nome']?></option>
            <?php endforeach;?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Título:</label>
            <input type="text" name="tituloAnuncio" class="form-control" id="tituloAnuncio">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição:</label>
            <textarea  type="text" name="descAnuncio" class="form-control" id="descAnuncio"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Preço:</label>
            <input type="text" name="precoAnuncio" class="form-control" id="precoAnuncio">
        </div>
        <div class="mb-3">
            <label class="form-label">Estado de conservação:</label>
            <select name="estadoAnuncio" id="estadoAnuncio" class="form-select">
                <option value="0">Ruim</option>
                <option value="1">Bom</option>
                <option value="2">Ótimo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
    </form>
</main>
<?php require_once 'pages/header.php'; ?>