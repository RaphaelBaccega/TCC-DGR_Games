<?php

require '../../db/conexao.php';

  if(isset($_SESSION['TOKEN'])){
    require '../header-logado.php';
  }else{
    require '../header.php';
  }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../assets/styles/jogos.css" />
  <title>Forza Horizon 5</title>
</head>

<body>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" />

  <div class="container">
    <div class="text-center text-white">
      <h1>Forza Horizon 5 by Playground Games</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card card-off">
          <div class="card-body text-center">
            <div>
              <img src="../../assets/imgs/icons/indisponivel.png" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4 hidden">None</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/playstation-logo.png" alt="" />
              </div>
              <p class="text-start ms-3 text-bold hidden">R$-</p>
              <div class="d-grid">
                <a class="btn btn-primary">INDISPONIVEL</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card">
          <div class="card-body text-center">
            <div>
              <img src="https://store-images.s-microsoft.com/image/apps.28758.13734397844529069.202e3fc9-37d6-4853-a58b-fabe504b71e8.4335e940-f927-4be4-af08-8e689a17bd7a" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4">Standart Edition</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/xbox-logo.png" alt="" />
              </div>
              <p class="text-start text-bold">GAME PASS</p>
              <div class="d-grid">
                <a href="https://www.xbox.com/pt-br/games/store/forza-horizon-5-edicao-padrao/9nkx70bbcdrn" target="_blank" class="btn btn-primary radius-15">COMPRAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-6">
        <div class="card">
          <div class="card-body text-center">
            <div>
              <img src="https://store-images.s-microsoft.com/image/apps.28758.13734397844529069.202e3fc9-37d6-4853-a58b-fabe504b71e8.4335e940-f927-4be4-af08-8e689a17bd7a" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4">Standart Edition</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/pc-logo.png" alt="" />
              </div>
              <p class="text-start text-bold">R$249,00</p>
              <div class="d-grid">
                <a href="https://store.steampowered.com/app/1551360/Forza_Horizon_5/" target="_blank" class="btn btn-primary radius-15">COMPRAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<?php

require '../footer.php';

?>