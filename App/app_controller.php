<?php 

    session_start();

    if(isset($_SESSION['nome'])){
        $user = $_SESSION['nome'];
    }

    require "app.model.php";
    require "conexao.php";
    require "app.service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    $user = isset($_POST['user']) ? $_POST['user'] : $user;

    if($acao == "login"){
        $usu = new Usuario();
        $usu->__set('user', $user);
        $usu->__set('senha', $_POST['pass']);

        $conexao = new Conexao();

        $loginService = new LoginService($conexao, $usu);
        $logins = $loginService->logar();
        if($logins == NULL){
            header('Location: ../index.php?erro=1');
        } else {
            $_SESSION['nome'] = $logins['nome'];
            $_SESSION["id"] = $logins["id"];
            $_SESSION["cargo"] = $logins["cargo"];
            $_SESSION["idws"] = $logins["idws"];
            $_SESSION["nivel"] = $logins["nivel"];
            header('Location: ../central.php');
        }
    } elseif($acao == "recuperarAllEsp") {
        $esp = new Espaco();
        $esp->__set('idws', $_SESSION["idws"]);

        $conexao = new Conexao();

        $espService = new EspService($conexao, $esp);
        $esps = $espService->recTodos();
    } elseif($acao == "recTasks") {
        $tarefa = new Tarefa();
        $tarefa->__set('idec', $idec);

        $conexao = new Conexao();

        $taskService = new TarefaService($conexao, $tarefa);
        $tasks = $taskService->recTasks();
    } elseif($acao == "criarTaref") {
        $tarefa = new Tarefa();
        $tarefa->__set("tarefa", $_POST["taref"]);
        $tarefa->__set("descricao", $_POST["desc"]);
        $tarefa->__set("id_status", $_POST["idec"]);
        $tarefa->__set('idec', $_POST["idec"]);

        $conexao = new Conexao();

        $taskService = new TarefaService($conexao, $tarefa);
        $tasks = $taskService->insTar();
        header('Location: ../space.php');
    }
?>