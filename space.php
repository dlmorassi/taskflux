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
    <script src="js/main.js"></script>
    <title>TaskFlux</title>
</head>
<body>
    <section class="cards-stt">
        <div class="card-col" id="pdt">
            <h1 class="col-tit">Pendentes</h1>
            <?php foreach($tasks as $indice => $task){ if($task->statu == 'Backlog'){ ?>
                <a href="task.php?idt=<?= $task->idt ?>">
                    <div class="card-task">
                        <p class="task"><?= $task->tarefa ?></p>
                        <div class="botoes-tk">
                            <a href="App/app_controller.php?acao=tratartk&idt=<?= $task->idt ?>&idec=<?= $idec ?>"><i class="fa fa-spinner"></i></a>
                            <a href="App/app_controller.php?acao=excluirtk&idt=<?= $task->idt ?>&idec=<?= $idec ?>"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </a>
            <?php } } ?>
            <p class="add-task" id="add-pdt-p" onclick="addpdt()">Adicionar tarefa +</p>
            <form action="App/app_controller.php?acao=criarTaref&idec=<?= $idec ?>" method="post" class="form-task" id="form-task-pdt">
                <input type="text" name="taref" placeholder="Tarefa" class="txt-ins-task">
                <textarea placeholder="Descrição" name="desc" class="desc-ins-task"></textarea>
                <input type="hidden" name="status" value="1">
                <input type="hidden" name="idec" value="<?= $idec; ?>">
                <div class="btn-form-task">
                    <input type="submit" value="Enviar" class="btn-ins-task">
                    <button type="reset" onclick="clpdt()" class="btn-ins-task">Cancelar</button>
                </div>
            </form>
        </div>
        <div class="card-col" id="amt">
            <h1 class="col-tit">Em andamento</h1>
            <?php foreach($tasks as $indice => $task){ if($task->statu == 'Em andamento'){ ?>
                <a href="task.php?idt=<?= $task->idt ?>">
                    <div class="card-task">
                        <p><?= $task->tarefa ?></p>
                        <div class="botoes-tk">
                            <a href="App/app_controller.php?acao=pdttk&idt=<?= $task->idt ?>&idec=<?= $idec ?>"><i class="fa fa-arrow-left"></i></a>
                            <a href="App/app_controller.php?acao=ccdtk&idt=<?= $task->idt ?>&idec=<?= $idec ?>"><i class="fa fa-check"></i></a>
                            <a href="App/app_controller.php?acao=excluirtk&idt=<?= $task->idt ?>&idec=<?= $idec ?>"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </a>
            <?php } } ?>
            <p class="add-task" id="add-ttm-p" onclick="addttm()">Adicionar tarefa +</p>
            <form action="App/app_controller.php?acao=criarTaref&idec=<?= $idec ?>" method="post" class="form-task" id="form-task-ttm">
                <input type="text" name="taref" placeholder="Tarefa" class="txt-ins-task">
                <textarea placeholder="Descrição" name="desc" class="desc-ins-task"></textarea>
                <input type="hidden" name="status" value="2">
                <input type="hidden" name="idec" value="<?= $idec; ?>">
                <div class="btn-form-task">
                    <input type="submit" value="Enviar" class="btn-ins-task">
                    <button type="reset" onclick="clttm()" class="btn-ins-task">Cancelar</button>
                </div>
            </form>
        </div>
        <div class="card-col" id="rlz">
            <h1 class="col-tit">Realizadas</h1>
            <?php foreach($tasks as $indice => $task){ if($task->statu == 'Realizada'){ ?>
                <a href="task.php?idt=<?= $task->idt ?>">
                    <div class="card-task">
                        <p><?= $task->tarefa ?></p>
                        <div class="botoes-tk">
                            <a href="App/app_controller.php?acao=tratartk&idt=<?= $task->idt ?>&idec=<?= $idec ?>"><i class="fa fa-arrow-left"></i></a>
                            <a href="App/app_controller.php?acao=excluirtk&idt=<?= $task->idt ?>&idec=<?= $idec ?>"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </a>
            <?php } } ?>
            <p class="add-task" id="add-ccd-p" onclick="addccd()">Adicionar tarefa +</p>
            <form action="App/app_controller.php?acao=criarTaref&idec=<?= $idec ?>" method="post" class="form-task" id="form-task-ccd">
                <input type="text" name="taref" placeholder="Tarefa" class="txt-ins-task">
                <textarea placeholder="Descrição" name="desc" class="desc-ins-task"></textarea>
                <input type="hidden" name="status" value="3">
                <input type="hidden" name="idec" value="<?= $idec; ?>">
                <div class="btn-form-task">
                    <input type="submit" value="Enviar" class="btn-ins-task">
                    <button type="reset" onclick="clccd()" class="btn-ins-task">Cancelar</button>
                </div>
            </form>
        </div>
    </section>
    <form action="App/app_controller.php?acao=criarTaref&idec=<?= $idec ?>" method="post" style="display: none;">
        <input type="text" name="taref" placeholder="Tarefa" class="txt-ins-task">
        <textarea placeholder="Descrição" name="desc" class="desc-ins-task"></textarea>
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