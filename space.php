<?php 

    $idec = $_GET['id'];
    $acao = "recTasks";
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
    <?php foreach($tasks as $indice => $task){?>
        <p><?= $task->idt ?></p>
        <p><?= $task->tarefa ?></p>
        <p><?= $task->descricao ?></p>
        <p><?= $task->statu ?></p>
    <?php } ?>
    <form action="App/app_controller.php?acao=criarTaref" method="post">
        <input type="text" name="taref" placeholder="Tarefa">
        <textarea placeholder="Descrição" name="desc"></textarea>
        <select name="status">
            <option value="1">Backlog</option>
            <option value="2">Em andamento</option>
            <option value="3">Realizada</option>
        </select>
        <input type="hidden" name="idec" value="<?= $idec; ?>">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>