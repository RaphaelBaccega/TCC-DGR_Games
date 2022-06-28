<?php

require '../db/conexao.php';

  if(isset($_SESSION['TOKEN'])){
    require 'header-logado.php';
  }else{
    require 'header.php';
  }

?>
<head>
    <script src="/tcc/assets/js/script-catalogo.js" defer></script>
    <script src="/tcc/assets/js/filtro.js" defer></script>
    <script src="/tcc/assets/js/paginacao.js" defer></script>
    <link rel="stylesheet" href="/tcc/assets/styles/catalogo.css">
    <title>Catálogo</title>
</head>

<body>

<section class="text-white text-center filter">
        <div class="container">
            <div class="row filtros">
                <div class="dropdown col-4 col-md-3" id="plataforma">
                    <button class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Plataforma
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li class="w-100"><a class="dropdown-item" data-cad="todos">Todas</a></li>
                        <li class="w-100"><a class="dropdown-item" data-cad="play">Playstation</a></li>
                        <li class="w-100"><a class="dropdown-item" data-cad="xbox">Xbox</a></li>
                        <li class="w-100"><a class="dropdown-item" data-cad="pc">PC</a></li>
                    </ul>
                </div>
                <div class="dropdown col-4 col-md-3" id="genero">
                    <button class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Gênero
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li class="w-100"><a class="dropdown-item" data-cad="acao-aventura">Ação e Aventura</a></li>
                        <li class="w-100"><a class="dropdown-item" data-cad="corrida">Corrida</a></li>
                        <li class="w-100"><a class="dropdown-item" data-cad="tiro">Tiro</a></li>
                        <li class="w-100"><a class="dropdown-item" data-cad="survival">Sobrevivência</a></li>
                    </ul>
                </div>
                <div class="dropdown col-4 col-md-3">
                    <button class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Recursos
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li class="w-100"><a class="dropdown-item" data-cad="online">Online</a></li>
                        <li class="w-100"><a class="dropdown-item" data-cad="offline">Offline</a></li>
                    </ul>
                </div>
                <div class="col-8 col-md-3 apagar-filtro">
                    <button id="apagar-filtro">Apagar Filtro</button>
                </div>
            </div>
        </div>
    </section>
    <main>
        <section class="games" id="jogos">
            
        </section>
        <section>
            <ul class="paginacao">
                <li class="item-page" id="1"><button class="link-page">1</button></li>
                <li class="item-page" id="2"><button class="link-page">2</button></li>
                <li class="item-page" id="3"><button class="link-page">3</button></li>
            </ul>
        </section>
    </main>
</body>
</html>

<?php
    require 'footer.php';
?>
