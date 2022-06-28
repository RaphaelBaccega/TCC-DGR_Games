<?php
require '../db/conexao.php';
if (isset($_GET['result'])) {
    $resultado = $_GET['result'];
} else {
    $resultado = null;
}


if (isset($_POST['email']) && isset($_POST['senha']) && empty($_POST['email']) && empty($_POST['senha'])) {
    $erro_input = "Preencha seu e-mail e senha!";
} else if (isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = limparPost($_POST['email']);
    $senha = limparPost($_POST['senha']);
    $senha_cript = md5($senha);

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? AND senha=? LIMIT 1");
    $sql->execute(array($email, $senha_cript));
    $usuario = $sql->fetch();

    if ($usuario) {
        $token = sha1(uniqid() . date('d-m-Y-H-i-s'));

        $sql = $pdo->prepare("UPDATE usuarios SET token=? WHERE email=? AND senha=?");
        if ($sql->execute(array($token, $email, $senha_cript))) {
            $_SESSION['TOKEN'] = $token;
            header('location:/tcc/index.php');
        }
    } else {
        $resultado = "erro";
        $erro_login = "E-mail e/ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesse a sua conta</title>
       <link rel="stylesheet" href="/tcc/assets/styles/login.css">
</head>

<body>
    <main>
        <section class="container-form">
            <div class="img-mobile">
                <img src="/tcc/assets/imgs/icons/logo-dgr.png" alt="">
            </div>

            <h1>ACESSE A SUA CONTA</h1>

            <form method="POST">
                <?php
                if (isset($resultado) && $resultado == "ok") { ?>
                    <div class="sucesso">
                        Cadastrado com sucesso!
                    </div>
                <?php  } ?>

                <?php if (isset($erro_login)) { ?>
                    <div class="erro-geral">
                        <?php echo $erro_login; ?>
                    </div>
                <?php } ?>

                <?php if (isset($erro_input)) { ?>
                    <div class="erro-geral">
                        <?php echo $erro_input; ?>
                    </div>
                <?php } ?>

                <label>E-mail</label>
                <input type="email" name="email" required>

                <label>Senha</label>
                <input type="password" name="senha" required>

                <button>ENTRAR</button>
            </form>
        </section>
        <section class="container-banner">
            <div class="logo">
                <img src="/tcc/assets/imgs/icons/logo-site.png" alt="">
            </div>
            <div class="acesso">
                <p>Não possue uma conta?</p>
                <a href="cadastro.php">Acesse aqui.</a>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <?php if (isset($resultado) && $resultado == "ok") { ?>
        <script>
            setTimeout(() => {
                $('.sucesso').addClass('oculto');
            }, 3000);
        </script>
    <?php } ?>
</body>

</html>