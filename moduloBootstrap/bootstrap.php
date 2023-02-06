<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container-fluid">
    <!-- container e container-fluid -->
    <h1>Meu primeiro sistema bootstrap</h1>
    <p>
        meu primeiro teste
    </p>
<hr>
    <h4>grids</h4>
    <div class="row border">
        <!-- 
            xs -mobile
            sm -tablet
            md -desktop
            lg -grandes monitores
         -->
        <div class="col-sm-3 text-center">A</div>
        <div class="col-sm-3 text-center">B</div>
        <div class="col-sm-3 text-center">C</div>
        <div class="col-sm-3 text-center">D</div>
    </div>
    <div class="row border"">
        <div class="col-sm-6 text-center">E</div>
        <div class="col-sm-3 text-center">F</div>
        <div class="col-sm-3 text-center">G</div>
    </div>
    <div class="row border"">
        <div class="col-sm-9 text-center">H</div>
        <div class="col-sm-3 text-center">I</div>
    </div>
<hr>
<h5>fonts</h5>
<h1>14px</h1>

<h3>
  Fancy display heading
  <small class="text-muted">With faded secondary text</small>
</h3>

<p>frase especifica pra usar a <mark> tag mark</mark></p>
<p>frase especifica pra usar a <abbr title="framework"> tag abbr</abbr></p>

<figure>
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>

<figure class="text-end">
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>

<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined.</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>

<dl>
    <dt>Café</dt>
    <dd>-Bebida quente</dd>
</dl>
<dl>
    <dt>Leite</dt>
    <dd>-Bebida gelada</dd>
</dl>

<p>para especifcar código tag <code> code</code></p>
<p>para especifcar comando tag kbd <kbd> ctrl + s</kbd> - para salvar</p>

<pre>
    tag pre
    deixa o 
    texto
    do jeito 
    que você
    escreveu
</pre>

<p class="text-danger text-center"> texto que representa perigo</p>
<p class="text-primary text-uppercase"> texto que representa primary</p>
<p class="bg-danger"> texto que representativo</p>
<p class="bg-success"> texto que representativo</p>
<p class="bg-warning"> texto que representativo</p>
<p class="bg-dark"> texto que representativo</p>
<p class="bg-info"> texto que representativo</p>
<p class="bg-primary"> texto que representativo</p>

<hr>
<h5>tables</h5>

<table class="table table-striped table-hover">
    <!-- table-striped - zebrada -->
    <!-- table-hover - destaque  -->
    <!-- table-striped table-hover - mix  -->
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td class="table-active">Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td class="table-active">Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<hr>
<h5>imagens</h5>

<img class="img-fluid rounded" src="4038512.jpg" alt="">
<img class="img-fluid rounded-circle" src="4038512.jpg" alt="">
<img class="img-fluid img-thumbnail" src="4038512.jpg" alt="">

<hr>
<h5>Botões</h5>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>

<br><br>
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-light">Light</button>
<button type="button" class="btn btn-outline-dark">Dark</button>

<br><br>
<button type="button" class="btn btn-primary btn-lg">Large button</button>
<button type="button" class="btn btn-secondary btn-lg">Large button</button>

<br><br>
<button type="button" class="btn btn-primary btn-sm">Small button</button>
<button type="button" class="btn btn-secondary btn-sm">Small button</button>

<br><br>
<button type="button" class="btn btn-primary" disabled>Primary button</button>
<button type="button" class="btn btn-secondary" disabled>Button</button>
<button type="button" class="btn btn-outline-primary" disabled>Primary button</button>
<button type="button" class="btn btn-outline-secondary" disabled>Button</button>

<br><br>
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
<hr>
<h5>grupo botões</h5>
<p>Qual emprsa voce prefere</p>
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Apple</button>
  <button type="button" class="btn btn-primary">Microsoft</button>
  <button type="button" class="btn btn-primary">Sony</button>
</div>
<br>
<br>
<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
  <button type="button" class="btn btn-dark">Button</button>
  <button type="button" class="btn btn-dark">Button</button>
  <button type="button" class="btn btn-dark">Button</button>
  <button type="button" class="btn btn-dark">Button</button>
  <button type="button" class="btn btn-dark">Button</button>
  <button type="button" class="btn btn-dark">Button</button>
</div>
<br>
<br>
<div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
  <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
  <label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
  <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
  <label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
  <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
  <label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
</div>

<hr>
<h5>Dropdown</h5>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
<br>
<br>
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown link
  </a>
    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
<br>
<br>
<hr>
<h5>Jumbotron</h5>
<div class="jumbotron">
  <h1>Curso de bootstrap</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, corporis quia? Magnam iste autem, unde facere esse consequuntur aut officiis repellat ea magni, nobis quibusdam ullam cum nulla beatae minima!</p>
</div>

<hr>
<h5>Alerts</h5>
<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  A simple light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  A simple dark alert—check it out!
</div>
<br>
<br>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<hr>
<h5>badges</h5>
<button type="button" class="btn btn-primary">
  Notifications <span class="badge text-bg-secondary">4</span>
</button>
<button type="button" class="btn btn-primary position-relative">
  Inbox
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
</button>
<hr>
<h5>cards</h5>

<div class="row">
  <div class="col-sm-6">
    <div class="card text-bg-success mb-3" style="max-width: 18rem;">
      <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the  card's content.</p>
        </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
      <div class="card-header">Header</div>
       <div class="card-body">
          <h5 class="card-title">Danger card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
<hr>
<h5>collapse</h5>

<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-bs-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
<h5>
  collapse + cards
</h5>
<div class="card border-primary mb-3" style="max-width: 18rem;">
  <a href="#teste" data-bs-toggle="collapse" class="card-header">Header</a>
  <div id="teste" class="card-body text-primary collapse">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<hr>
<h5>list-group</h5>
<ul class="list-group">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
<br>
<br>
<ul class="list-group">
  <a href="#" class="list-group-item list-group-item-success">An item</a>
  <a href="#" class="list-group-item">An item</a>
  <a href="#" class="list-group-item disabled">A second item</a>
  <a href="#" class="list-group-item active">A third item</a>
  <a href="#" class="list-group-item">A fourth item</a>
  <a href="#" class="list-group-item">And a fifth one</a>
</ul>
<hr>
<h5>abas</h5>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" aria-current="page" href="#home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#sobre">Sobre</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " data-toggle="tab" href="#contato">Contato</a>
  </li>
  </ul>
<div class="tab-content">
  <div id="home" class="tab-pane active in fade">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, earum! Voluptatibus dolore rem quis officia? Itaque saepe ducimus sunt veritatis aut adipisci enim, nemo voluptatibus magnam quidem perferendis porro exercitationem voluptatum aliquid temporibus odit. Architecto eligendi unde maxime repudiandae in error delectus, ea necessitatibus magni velit a nesciunt eum non?
  </div>
  <div id="sobre" class="tab-pane fade">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora doloremque ipsa velit, dolor amet necessitatibus saepe incidunt animi, culpa, minus debitis modi aliquid omnis? Eveniet voluptates minus delectus tempore laudantium?
  </div>
  <div id="contato" class="tab-pane fade">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat commodi suscipit dolorem atque enim, reiciendis sequi vitae. Repudiandae voluptatibus nam itaque facere, excepturi recusandae nihil quae explicabo beatae tempora, ipsum quidem quos doloribus optio soluta veniam assumenda. Eligendi porro tempora, facere placeat autem accusantium reiciendis inventore recusandae veniam est eius repellat voluptate aliquid, enim, esse dignissimos corporis illum saepe ad facilis amet vero eum? Mollitia, nisi veniam! Explicabo ratione modi, cumque quae cum vitae officia, velit inventore maiores vel debitis!
  </div>
</div>

<hr>
<h5>paginação</h5>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">anterior</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">próxima</a></li>
  </ul>
</nav>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-between">
    <li class="page-item"><a class="page-link" href="#">anterior</a></li>
    <li class="page-item"><a class="page-link" href="#">próxima</a></li>
  </ul>
</nav>
<hr>
<hr>

<hr>
<form class="row g-3">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">First name</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">City</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">State</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Zip</label>
    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
    <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>