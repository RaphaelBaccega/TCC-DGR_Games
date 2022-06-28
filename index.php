<?php

require 'db/conexao.php';

  if(isset($_SESSION['TOKEN'])){
    require 'pages/header-logado.php';
  }else{
    require 'pages/header.php';
  }

?>
<head>
    <link rel="stylesheet" href="assets/styles/index.css" />
  <title>Home</title>
</head>
<body>

  <main class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-2 text-white">
      <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <img src="assets/imgs/icons/catalogo.jpg" class="d-block mx-lg-auto img-fluid rounded" alt="" loading="lazy">
      </div>
      <div class="col-lg-6 ">
        <h1 class="display-6 fw-bold lh-1">Bem-vindo ao <span>DGR</span> Games.</h1>
        <p class="lead">Somos um hub de jogos pagos e gratuitos. Fomos projetados para atender todos os tipos de jogadores e suas respectivas plataformas.</p>
      </div>
    </div>

    <section class="features-icons text-center text-white conteudo">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex"><img src="assets/imgs/icons/discount.png" class="m-auto mb-2 text-primary"></img></div>
              <h3>Jogos com desconto</h3>
              <p class="lead mb-0">Encontre os melhores descontos </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex"><img src="assets/imgs/icons/category.png" class="m-auto mb-2 text-primary"></img></div>
              <h3>Diversas Categorias</h3>
              <p class="lead mb-0">Encontre a categoria ideal para você</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex"><img src="assets/imgs/icons/popular.png" class="m-auto mb-2 text-primary"></img></div>
              <h3>Populares do momento</h3>
              <p class="lead mb-0">Encontre os jogos mais jogados do momento</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="row flex-lg-row-reverse align-items-center g-5 text-white last-content">
      <div class="col-lg-6">
        <h1 class="display-6 fw-bold lh-1 mb-3">Navegue pelo <span>Catálogo</span>!</h1>
        <p class="lead">Nosso catálogo está recheado de jogos com diversas categorias para facilitar a sua busca. Encontre jogos de Playstation, Xbox e PC em um só lugar.</p>
        <a href="pages/catalogo.php"><button class="btn btn-lg btn-primary mt-2 fw-bold">Explorar Catálogo</button></a>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <img src="assets/imgs/icons/capa.png" class="d-block mx-lg-auto img-fluid rounded" alt="" width="550" height="250" loading="lazy">
      </div>
    </div>
  </main>
  <?php

  require 'pages/footer.php';

  ?>

</body>
