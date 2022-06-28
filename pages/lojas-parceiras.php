<?php

require '../db/conexao.php';

  if(isset($_SESSION['TOKEN'])){
    require 'header-logado.php';
  }else{
  require 'header.php';
  }

?>
<head>
    <link rel="stylesheet" href="assets/styles/catalogo.css">
    <title>Lojas Parceiras</title>
        
    <style>
        .container .row a img{
            width: 210px;
        }

        .patrocinios{
            display: flex;
            flex-wrap: wrap;
        }

        @media(max-width: 445px){
              .patrocinios{
                justify-content: center;
            }
            
            .offset-md-2 h2{
                margin-top: 20px;
            }

              .container .row a img{
                width: 50%;
            }
        }
    </style>
    </head>
    <body>
        <main class="container">
            <div class="row">
                <div class="col-md-5 text-white">
                    <h2 class="text-white mb-5 text-uppercase text-center">Lojas Parceiras</h2>
                    <div class="patrocinios">
                        <a href="https://www.kabum.com.br" target="_blank"><img class="mb-5 mx-auto d-block" src="../assets/imgs/icons/kabum.png" alt=""></a>
                        <a href="https://www.thegames.com.br" target="_blank"><img class="mb-5 mx-auto d-block" src="../assets/imgs/icons/theGameShop.png" alt=""></a>
                        <a href="https://www.gamegames.com.br/" target="_blank"><img class="mb-5 mx-auto d-block" src="../assets/imgs/icons/game-games.png" alt=""></a>
                        <a href="https://www.smartnetstore.com.br/" target="_blank"><img class="mb-5 mx-auto d-block" src="../assets/imgs/icons/smart-store.png" alt=""></a>
                    </div>

                    <h5 class="mb-3"><ins>VANTAGENS DE SER UMA LOJA PARCEIRA:</ins></h5>
                    <p>*Seus links de referência em nossos jogos</p>
                    <p>*Aumento de tráfego em seu site </p>
                    <p>*Divulgamos em nossas redes sociais</p>
                </div>

                <div class=" offset-md-2 col-md-5">
                    <h2 class="text-white mb-5 text-center text-uppercase">Torne-se um parceiro(a)</h2>
                    <form action="https://formsubmit.co/contato.dgrgames@gmail.com" method="POST">
                        
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="floatingText" placeholder="Nome da Loja" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" autocomplete="off" required>
                            <label for="floatingPassword">Nome da Loja</label>
                          </div>

                        <div class="form-floating mb-3">
                          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="email@examplo.com" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" autocomplete="off" required>
                          <label for="floatingInput">email@dominio.com</label>
                        </div>

                        <div>
                            <label for="textarea" class="text-white fs-4" >Mensagem</label>
                            <textarea rows="5" name="mensagem" class="form-control mb-3 " id="textarea" aria-label="With textarea" required></textarea>
                          </div>
                    
                        <div class="checkbox mb-3">
                        <input type="hidden" name="_next" value="http://localhost/tcc/pages/obrigado.php">
                        <button class="w-100 btn btn-lg btn-primary fw-bold text-uppercase" type="submit">Enviar</button>
                      </form>
                </div>
            </div>
        </main>
    </body>

<?php 

require 'footer.php';

?>