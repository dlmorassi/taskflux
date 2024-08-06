<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js"></script>
    <title>Taskflux</title>
</head>
<body>
    <section class="log">
        <div class="card">
            <form action="App/app_controller.php?acao=login" method="post" class="form" id="login">
                <h1 class="tit-form">Login</h1>
                <?php if(isset($_GET['erro']) && $_GET['erro'] == 1){?>
                    <p class="danger">Usuário ou senha incorretos!</p>
                <?php }?>
                <input type="text" name="user" placeholder="Digite seu email" class="txt">
                <input type="password" name="pass" placeholder="Senha" class="txt">
                <div class="botoes">
                    <input type="submit" class="btn" value="Entrar">
                    <p onclick="cad()" class="btn">Cadastrar-se</p>
                </div>
            </form>
            <form action="App/app_controller.php?acao=cadastro" method="post" class="form" id="cadastro" style="display: none;">
                <h1 class="tit-form">Cadastro</h1>
                <input type="text" name="ws" placeholder="Workspace" class="txt">
                <input type="text" name="user" placeholder="Email" class="txt">
                <input type="text" name="nome" placeholder="Nome" class="txt">
                <input type="text" name="cargo" placeholder="Cargo" class="txt">
                <input type="password" name="pass" placeholder="Senha" class="txt">
                <div class="botoes">
                    <input type="submit" class="btn" value="Enviar">
                    <p onclick="log()" class="btn">Entrar</p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>