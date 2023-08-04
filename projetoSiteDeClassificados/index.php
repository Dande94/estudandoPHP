<?php require_once 'pages/header.php'; ?>
<?php
require_once "classes/anuncios.class.php";
require_once 'classes/usuario.class.php';
require_once 'classes/categorias.class.php';
$a = new Anuncios();
$u = new Usuario();
$c = new Categorias();


$filtros = [
    'categoria' => '',
    'preco' => '',
    'estado' => ''
];

if(isset($_GET['filtros'])){//não precisa de addslashes(), pq sera recebido um array;
    $filtros = $_GET['filtros'];
}


$total_anuncios = $a->getTotalAnuncios();
$total_usuarios = $u->getTotalUsuarios();

//paginação
$p  = 1;
if (isset($_GET['p']) && !empty($_GET['p'])) {
    $p = addslashes($_GET['p']);
}
$max_anuncio_por_pagina = 4;
$total_paginas = ceil($total_anuncios / $max_anuncio_por_pagina);
//fim-paginação
$ultimos_anuncios = $a->getUltimosAnuncios($p, $max_anuncio_por_pagina,$filtros);

?>

<div class="container card text-bg-light my-3">
    <div class="card-body text-align-center">
        <h1 class="card-title">Nós temos hoje <?php echo $total_anuncios; ?> anúncios</h1>
        <p class="card-text">E mais de <?php echo $total_usuarios; ?> usuários cadastrados!</p>
    </div>
</div>
<div class="container">
    <div class="row mx-2">
        <div class="col-sm-4">
            <h5>Busca avançada</h5>
            <form action="" method="get">
                <label for="">Categoria:</label>
                <select class="form-select" id="categoria" name="filtros[categoria]" aria-label="Default select example">
                    <option value=""></option>
                        <?php $cats = $c->getLista();
                        foreach ($cats as $cat) :
                        ?>
                        <option value="<?php echo $cat['id'] ?>" <?php echo ( $cat['id'] == $filtros['categoria']) ? 'selected="selected"' : '' ?> ><?php echo $cat['nome'] ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="">Preço:</label>
                <select class="form-select" id="preco" name="filtros[preco]" aria-label="Default select example">
                    <option value=""></option>
                    <option value="0-50" <?php echo ($filtros['preco'] =='0-50') ? 'selected="selected"' : '' ?> >R$ 0 - 50</option>
                    <option value="51-200" <?php echo ($filtros['preco'] =='51-200') ? 'selected="selected"' : '' ?> >R$ 51 - 200</option>
                    <option value="201-400" <?php echo ($filtros['preco'] =='201-400') ? 'selected="selected"' : '' ?> >R$ 201 - 400</option>
                    <option value="401-600" <?php echo ($filtros['preco'] =='401-600') ? 'selected="selected"' : '' ?> >R$ 401 - 600</option>
                    <option value="601-800" <?php echo ($filtros['preco'] =='601-800') ? 'selected="selected"' : '' ?> >R$ 601 - 800</option>
                    <option value="801-1000" <?php echo ($filtros['preco'] =='801-1000') ? 'selected="selected"' : '' ?> >R$ 801 - 1000</option>
                    <option value="1001-2000" <?php echo ($filtros['preco'] =='1001-2000') ? 'selected="selected"' : '' ?> >R$ 1001 - 2000</option>
                </select>
                <label for="">Estado de conservação:</label>
                <select class="form-select" id="estado" name="filtros[estado]" aria-label="Default select example">
                    <option value=""></option>
                    <option value="0" <?php echo ($filtros['estado'] =='0') ? 'selected="selected"' : '' ?> >Ruim</option>
                    <option value="1" <?php echo ($filtros['estado'] =='1') ? 'selected="selected"' : '' ?> >Bom</option>
                    <option value="2" <?php echo ($filtros['estado'] =='2') ? 'selected="selected"' : '' ?> >Ótimo</option>
                </select>
                <br>
                <div class="d-flex justify-content-between gap-2">
                    <input class="btn btn-outline-primary w-50" type="reset" value="Limpar">
                    <input class="btn btn-outline-dark w-50" type="submit" value="Filtrar">
                </div>    
            </form>
        </div>
        <div class="col-sm-8">
            <h5>Últimos Anúncios</h5>
            <table class="table table-striped">
                <tbody>
                    <?php foreach ($ultimos_anuncios as $anuncio) : ?>
                        <tr>
                            <td>
                                <?php if (!empty($anuncio['url'])) : ?>
                                    <img src="assets/images/anuncios/<?php echo $anuncio['url']; ?>" border="0" height="50" alt="">
                                <?php else : ?>
                                    <img src="assets/images/default.jpg" height="50" alt="">
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="produto.php?id=<?php echo $anuncio['id'] ?>"><?php echo $anuncio['titulo'] ?></a><br>
                                <?php echo $anuncio['categoria'] ?>
                            </td>
                            <td>
                                R$ <?php echo number_format($anuncio['preco'], 2) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <nav>
                <ul class="pagination pagination-sm">
                    <?php for ($q = 1; $q <= $total_paginas; $q++) : ?>
                        <li class="page-item <?php echo ($p == $q) ? 'active' : ''; ?>"><a class="page-link " href="index.php?p=<?php echo $q ?>"><?php echo $q ?></a></li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php require_once 'pages/footer.php'; ?>