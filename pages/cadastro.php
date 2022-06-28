<?php 

    require '../db/conexao.php';

     if(isset($_POST['nome_usuario']) && isset($_POST['email']) && isset($_POST['senha'])){
        //VERIFICAR SE TODOS CAMPOS FORAM PREENCHIDOS
        if(empty($_POST['nome_usuario']) or empty($_POST['email']) or empty($_POST['senha'])){
            $erro_geral = "Todos os campos são obrigatórios";
        }else{
            //RECEBER VALORES E LIMPAR
            $nome = limparPost($_POST['nome_usuario']);
            $email = limparPost($_POST['email']);
            $senha = limparPost($_POST['senha']);
            $senha_cript = md5($senha);

            //VERIFICAR NOME 
            if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
                $erro_nome = "Aceitamos apenas letras e espaços em branco!";
            }

            //VERIFICAR SE EMAIL É VÁLIDO
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erro_email = "Formato de e-mail inválido!";
            }

            //VERIFICAR SE SENHA TEM MAIS DE 6 DIGITOS
            if(strlen($senha) < 6){
                $erro_senha = "Senha com no mínimo 6 caracteres!";
            }

            if(!isset($erro_geral) && !isset($erro_nome) && !isset($erro_email) && !isset($erro_senha)){
                //VERIFICAR SE O EMAIL JÁ ESTÁ CADASTRADO NO BANCO
                $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? LIMIT 1");
                $sql->execute(array($email));
                $usuario = $sql->fetch();

                //SE NAO EXISTIR O USUARIO ADICIONAR NO BANCO
                if(!$usuario){
                    $token= "";
                    $data_cadastro = date('d/m/Y');
                    $sql = $pdo->prepare("INSERT INTO usuarios VALUES(null,?,?,?,?,?)");
                    if($sql->execute(array($nome, $email, $senha_cript, $token, $data_cadastro))){
                        header('location:login.php?result=ok');
                    }

                }else{
                    //SE JÁ EXISTIR O USUÁRIO APRESENTAR ERRO
                    $erro_geral = "Usuário já cadastrado!";
                }
            }
        }

    } 
    
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crie a sua conta</title>
        <link rel="stylesheet" href="/tcc/assets/styles/cadastro.css">
    </head>
    <body>
        <main>
            <section class="container-form">
            <div class="img-mobile">
                    <img src="/tcc/assets/imgs/icons/logo-dgr.png" alt="">
                </div>

                <h1>CRIE A SUA CONTA</h1>

                <form method="POST">

                    <?php if(isset($erro_geral)){?>
                    <div class="erro-geral">
                    <?php  echo $erro_geral; ?>
                    </div>
                    <?php } ?>
    
                    <label>Usuário</label>
                    <input required type="text" name="nome_usuario" <?php if(isset ($erro_geral) or isset($erro_nome)){echo 'class="erro-input"';}?> <?php if(isset($_POST['nome_usuario'])){echo "value=".$_POST['nome_usuario']."";}?>>
                    <?php if(isset($erro_nome)){?>
                            <div class="erro"><?php echo $erro_nome; ?></div>
                    <?php } ?>
    
                    <label>E-mail</label>
                    <input required type="email" name="email" <?php if(isset ($erro_geral) or isset($erro_email)){echo 'class="erro-input"';}?> <?php if(isset($_POST['email'])){echo "value=".$_POST['email']."";}?>>
                    <?php if(isset($erro_email)){?>
                            <div class="erro"><?php echo $erro_email; ?></div>
                    <?php } ?>

                    <label>Senha</label>
                    <input required type="password" name="senha" <?php if(isset ($erro_geral) or isset($erro_senha)){echo 'class="erro-input"';}?> <?php if(isset($_POST['senha'])){echo "value=".$_POST['senha']."";}?>>
                    <?php if(isset($erro_senha)){?>
                            <div class="erro"><?php echo $erro_senha; ?></div>
                    <?php } ?>

                    <button type="submit">REGISTRAR-SE</button>

                </form>
            </section>
            <section class="container-banner">
            <div class="logo">
                <img src="/tcc/assets/imgs/icons/logo-site.png" alt="">
            </div>
            <div class="acesso">
                <p>Já possue uma conta?</p>
                <a href="login.php">Acesse aqui.</a>
            </div>
        </section>
        </main>
    </body>
</html>
