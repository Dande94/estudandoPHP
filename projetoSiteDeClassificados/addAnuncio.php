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
    <h2>Meus Anúncios - Adicionar Anúncio</h2>
    <form action="" method="POST" enctype="multipart/form-data">
         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Categoria:</label>
            <select name="catAnuncio" id="catAnuncio">
                <option value=""></option>
                <?php // foreach():?>
                <?php //endforeach;?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Título:</label>
            <input type="text" name="tituloAnuncio" class="form-control" id="tituloAnuncio">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descrição:</label>
            <textarea  type="text" name="descAnuncio" class="form-control" id="descAnuncio"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Preço:</label>
            <input type="email" name="pecoAnuncio" class="form-control" id="pecoAnuncio" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Estado de conservação:</label>
            <select name="estadoAnuncio" id="estadoAnuncio" class="form-select">
                <option value="0">Ruim</option>
                <option value="1" selected >Bom</option>
                <option value="2">Ótimo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-outline-success">Publicar</button>
    </form>
</main>
<?php require_once 'pages/header.php'; ?>