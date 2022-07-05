<?php

    require_once('repository/FuncionarioRepository.php');
    session_start();

    if(fnDeleteFuncionario($_SESSION['id'])) {
        $msg = "Sucesso ao apagar";
    } else {
        $msg = "Falha ao apagar";
    }

    unset($_SESSION['id']);

    $page = "listagem-de-funcionarios.php";
    setcookie('notify', $msg, time() + 10, "/sgf/{$page}", 'localhost');
    header("location: {$page}");
    exit;