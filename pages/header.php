<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/tcc/assets/styles/bootstrap.min.css" />
  <link rel="stylesheet" href="/tcc/assets/styles/headers.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/tcc/assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/82c01e6859.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/tcc/assets/styles/search-results.css">
  <link rel="stylesheet" href="/tcc/assets/styles/footer.css">
  <link rel="shortcut icon" href="/tcc/assets/imgs/icons/logo-fav.png" type="image/png">

</head>

<body>
    <header>

      <div id="btn-menu">
        <button><i class="fa-solid fa-bars"></i></button>
      </div>

      <div class="logo">
        <a href="/tcc/index.php"><img src="/tcc/assets/imgs/icons/logo-site.png" alt="Logo DGR Games"></a>
      </div>

      <nav id="nav">
        <div>
          <ul>
            <li><a href="/tcc/index.php">Home</a></li>
            <li><a href="/tcc/pages/catalogo.php">Catálogo</a></li>
            <li><a href="/tcc/pages/lojas-parceiras.php">Lojas Parceiras</a></li>
          </ul>
        </div>

        <div class="btn btn-mobile">
          <a href="/tcc/pages/login.php"><button class="btn-entrar">Entrar</button></a>
          <a href="/tcc/pages/cadastro.php"><button class="btn-cadastrar">Cadastrar</button></a>
        </div>
      </nav>

      <div class="btn btn-desk">
        <a href="/tcc/pages/login.php"><button class="btn-entrar">Entrar</button></a>
        <a href="/tcc/pages/cadastro.php"><button class="btn-cadastrar">Cadastrar</button></a>
      </div>
    </header>

  <?php

  require __DIR__ . '/../search.php';

  ?>
</body>
<script>
  const btn = document.getElementById("btn-menu");
  const nav = document.getElementById("nav");

  btn.addEventListener("click", () => {
    nav.classList.toggle("nav");
  });
</script>
