<?php 

    $acao = 'recuperarAllEsp';
    require 'App/app_controller.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <title>TaskFlux</title>
</head>
<body>
    <section class="spaces">
        <div class="spc-card">
            <div class="its">
                <?php foreach($esps as $indice => $esp){ ?>
                    <a href="space.php?id=<?= $esp->idec ?>" class="espaco"><?= $esp->nome ?></a>
                <?php } ?>
            </div>
        </div>
        <?php if($_SESSION['nivel'] == "Super Admin" || $_SESSION['nivel'] == "Admin") { ?>
            <div class="form-esps">
                <form action="App/app_controller.php?acao=addspc" method="post" class="form-esp">
                    <input type="text" name="spcname" class="txt-spc" placeholder="Nome do espaço">
                    <input type="submit" value="Criar" class="btn-spc">
                </form>
            </div>
        <?php } ?>
    </section>
</body>
</html>