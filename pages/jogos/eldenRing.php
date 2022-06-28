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
  <title>Elden Ring</title>
</head>

<body>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" />

  <div class="container">
    <div class="text-center text-white">
      <h1>Elden Ring by FromSoftware</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div>
              <img src="https://image.api.playstation.com/vulcan/ap/rnd/202110/2000/phvVT0qZfcRms5qDAk0SI3CM.png" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4">Standart Edition</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/playstation-logo.png" alt="" />
              </div>
              <p class="text-start">R$299,90</p>
              <div class="d-grid">
                <a href="https://store.playstation.com/pt-br/product/UP0700-PPSA04610_00-ELDENRING0000000" target="_blank" class="btn btn-primary">COMPRAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-off">
          <div class="card-body text-center">
            <div>
              <img src="../../assets/imgs/icons/indisponivel.png" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4 hidden">None</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/xbox-logo.png" alt="" />
              </div>
              <p class=" text-start ms-3 hidden">R$-</p>
              <div class="d-grid">
                <a target="_blank" class="btn btn-primary radius-15">INDISPONIVEL</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-6">
        <div class="card card-off">
          <div class="card-body text-center">
            <div>
              <img src="../../assets/imgs/icons/indisponivel.png" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4 invisible">None</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/pc-logo.png" alt="" />
              </div>
              <p class="text-start ms-3 invisible">R$-</p>
              <div class="d-grid">
                <a target="_blank" class="btn btn-primary radius-15">INDISPONIVEL</a>
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