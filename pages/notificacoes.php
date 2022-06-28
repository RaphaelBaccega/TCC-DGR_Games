<?php
require '../db/conexao.php';

$user = auth($_SESSION['TOKEN']);

if(!$user){
  header('location:login.php');
}

?>

<?php 
  require 'header-logado.php';
?>

    <head>
        <link rel="stylesheet" href="../../assets/styles/notificacoes.css">
        <title>Notificações</title>
    </head>
    <body>
    <main>
      <div class="p-3 rounded container text-white">
      <h6 class="pb-2 mb-0 text-uppercase fs-4 mb-3">Notificações</h6>
      <div class="d-flex pt-3">
        <div class="pb-3 mb-0 lh-sm border-bottom w-100">
          <div class="d-flex justify-content-between">
            <strong class="text-white">A franquia de corida mais amada pelos sonystas, VENHA CONFERIR!</strong>
            <a class="text-decoration-none me-4" href="jogos/gt7.php" style="color: #1B64F2;">Visualizar</a>
          </div>
        </div>
      </div>
      <div class="d-flex pt-3">
        <div class="pb-3 mb-0 lh-sm border-bottom w-100">
          <div class="d-flex justify-content-between">
            <strong class="text-white">O jogo Call of Duty: Warzone está disponível!</strong>
            <a class="text-decoration-none me-4" href="jogos/codWarzone.php" style="color: #1B64F2;">Visualizar</a>
          </div>
        </div>
      </div>
      <div class="d-flex pt-3">
        <div class="pb-3 mb-0 lh-sm border-bottom w-100">
          <div class="d-flex justify-content-between">
            <strong class="text-white">Elden Ring chegou em nosso catálogo!</strong>
            <a class="text-decoration-none me-4" href="jogos/eldenRing.php" style="color: #1B64F2;">Visualizar</a>
          </div>
        </div>
      </div>
    </main>
    
    </body>
<?php 
  require 'footer.php';
?>