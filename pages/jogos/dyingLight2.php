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
  <title>Dying Light 2 - Stay Human</title>
</head>

<body>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" />

  <div class="container">
    <div class="text-center text-white">
      <h1>Dying Light 2 - Stay Human by Techland</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div>
              <img src="https://image.api.playstation.com/vulcan/img/rnd/202106/2908/7aJhOMuJALdBPqZHVy3CgJsg.png" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4">Standart Edition</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/playstation-logo.png" alt="" />
              </div>
              <p class="text-start">R$211,92</p>
              <div class="d-grid">
                <a href="https://store.playstation.com/pt-br/product/UP3050-PPSA02261_00-DL2GAME0000000US" target="_blank" class="btn btn-primary">COMPRAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card">
          <div class="card-body text-center">
            <div>
              <img src="https://image.api.playstation.com/vulcan/img/rnd/202106/2908/7aJhOMuJALdBPqZHVy3CgJsg.png" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4">Standart Edition</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/xbox-logo.png" alt="" />
              </div>
              <p class="text-start">R$264,95</p>
              <div class="d-grid">
                <a href="https://www.xbox.com/pt-br/games/store/dying-light-2-stay-human/bpcl0txcgj1w" target="_blank" class="btn btn-primary radius-15">COMPRAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-6">
        <div class="card">
          <div class="card-body text-center">
            <div>
              <img src="https://image.api.playstation.com/vulcan/img/rnd/202106/2908/7aJhOMuJALdBPqZHVy3CgJsg.png" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4">Standart Edition</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/pc-logo.png" alt="" />
              </div>
              <p class="text-start">R$249,00</p>
              <div class="d-grid">
                <a href="https://store.steampowered.com/app/534380/Dying_Light_2_Stay_Human/" target="_blank" class="btn btn-primary radius-15">COMPRAR</a>
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