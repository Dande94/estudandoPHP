<?php require_once 'pages/header.php'; ?>
<?php
if (empty($_SESSION['cLogin'])) {
?>
    <script type="text/javascript">
        window.location.href = "login.php"
    </script>
<?php
    exit;
}

require_once "classes/anuncios.class.php";
$a = new Anuncios();
if (isset($_POST['tituloAnuncio']) && !empty($_POST['tituloAnuncio'])) {
    $catAnuncio = $_POST['catAnuncio'];
    $tituloAnuncio = $_POST['tituloAnuncio'];
    $descAnuncio = $_POST['descAnuncio'];
    $precoAnuncio = $_POST['precoAnuncio'];
    $estadoAnuncio = $_POST['estadoAnuncio'];
    if(isset($_FILES['fotos'])){
        $fotos = $_FILES['fotos'];
    }else{
        $fotos = [];
    }

    $a->editAnuncio($catAnuncio, $tituloAnuncio, $descAnuncio, $precoAnuncio, $estadoAnuncio, $fotos,$_GET['id']);
?>
    <div class="container my-3">
        <div class="alert alert-success" role="alert">Anuncio <strong>editado</strong> com sucesso!</div>
    </div>
<?php
}
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $info = $a->getAnuncio($_GET['id']);
} else {
?>
    <script type="text/javascript">
        window.location.href = "meusAnuncios.php.php"
    </script>
<?php
}

?>
<main class="container">
    <h2>Meus Anúncios - Editar Anúncio</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Categoria:</label>
            <select name="catAnuncio" id="catAnuncio" class="form-select">
                <?php
                require_once 'classes/categorias.class.php';
                $c = new Categorias();
                $cats = $c->getLista();
                foreach ($cats as $cat) : ?>
                    <option value="<?php echo $cat['id'] ?>" <?php echo ($info['id_categoria'] == $cat['id']) ? 'selected="selected"' : '' ?>><?php echo $cat['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Título:</label>
            <input type="text" name="tituloAnuncio" class="form-control" id="tituloAnuncio" value="<?php echo $info['titulo'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição:</label>
            <textarea type="text" name="descAnuncio" class="form-control" id="descAnuncio"><?php echo $info['descricao'] ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Preço:</label>
            <input type="text" name="precoAnuncio" class="form-control" id="precoAnuncio" value="<?php echo $info['preco'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Estado de conservação:</label>
            <select name="estadoAnuncio" id="estadoAnuncio" class="form-select">
                <option value="0" <?php echo ($info['estado'] == 0) ? 'selected="selected"' : '' ?>>Ruim</option>
                <option value="1" <?php echo ($info['estado'] == 1) ? 'selected="selected"' : '' ?>>Bom</option>
                <option value="2" <?php echo ($info['estado'] == 2) ? 'selected="selected"' : '' ?>>Ótimo</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Fotos do anúncio:</label><br>
            <input type="file" name="fotos[]" id="" multiple>
            <div class="card mt-3">
                <div class="card-header">
                    Fotos do anúncio:
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success">Salvar</button>
    </form>
</main>
<?php require_once 'pages/header.php'; ?>