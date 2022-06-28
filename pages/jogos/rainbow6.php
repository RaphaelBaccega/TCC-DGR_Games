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
  <link rel="stylesheet" href="../../assets/styles/jogos.css"/>
  <title>Rainbow Six Siege</title>
</head>

<body>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" />

  <div class="container">
    <div class="text-center text-white">
      <h1>Rainbow Six Siege by Ubisoft</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div>
              <img src="https://image.api.playstation.com/vulcan/img/rnd/202103/0217/cE40dxmsoqJUxZ9MKj3BvNOI.png" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4">Deluxe Edition</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/playstation-logo.png" alt="" />
              </div>
              <p class="text-start">R$37,47</p>
              <div class="d-grid">
                <a href="https://store.playstation.com/pt-br/product/UP0001-PPSA01396_00-RB6SIEGEDELUXE07" target="_blank" class="btn btn-primary">COMPRAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card">
          <div class="card-body text-center">
            <div>
              <img src="https://image.api.playstation.com/vulcan/img/rnd/202103/0217/cE40dxmsoqJUxZ9MKj3BvNOI.png" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4">Deluxe Edition</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/xbox-logo.png" alt="" />
              </div>
              <p class="text-start">GAME PASS</p>
              <div class="d-grid">
                <a href="https://www.xbox.com/pt-br/games/store/tom-clancys-rainbow-six-siege-deluxe-edition/9nshnmcm0jr8" target="_blank" class="btn btn-primary radius-15">COMPRAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-6">
        <div class="card">
          <div class="card-body text-center">
            <div>
              <img src="https://image.api.playstation.com/vulcan/img/rnd/202103/0217/cE40dxmsoqJUxZ9MKj3BvNOI.png" width="100%" class="rounded" alt="" />
              <h5 class="mb-0 mt-4">Deluxe Edition</h5>
              <div class="list-inline contacts-social mt-3 mb-3">
                <img src="../../assets/imgs/icons/pc-logo.png" alt="" />
              </div>
              <p class="text-start">R$29,70</p>
              <div class="d-grid">
                <a href="https://store.ubi.com/ofertas/game?lang=pt_BR&pid=61d56f7aa6102b495e0ffff1&dwvar_61d56f7aa6102b495e0ffff1_Platform=pcdl&edition=Edição%20Deluxe&source=detail" target="_blank" class="btn btn-primary radius-15">COMPRAR</a>
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