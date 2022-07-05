<?php
    require_once('repository/FuncionarioRepository.php');
    session_start();

    $id = filter_input(INPUT_POST, 'idFuncionario', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

    if(fnUpdateFuncionario($id, $nome, $email, $cpf)) {
        $msg = "Sucesso ao gravar";
    } else {
        $msg = "Falha na gravação";
    }
    
    $_SESSION['id'] = $id;
    $page = "formulario-edita-funcionario.php";
    setcookie('notify', $msg, time() + 10, "sgf/{$page}", 'localhost');
    header("location: {$page}");
    exit;