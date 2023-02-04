<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
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
</body>
</html>