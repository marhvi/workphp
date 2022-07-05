<?php

    require_once('repository/funcionarioRepository.php');
    require_once('util/upload.php');

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

    $foto = uploadImg($_FILES['foto']);

    if(empty($nome) || empty($email) || empty($cpf) || empty($foto)) {
        $msg = "Preencher todos os campos primeiro.";
    } else {
        if(fnAddfuncionario($nome, $foto, $email, $cpf)) {
            $msg = "Sucesso ao gravar";
        } else {
            $msg = "Falha na gravação";
        }
    }
    
    $page = "formulario-cadastro-funcionario.php";
    setcookie('notify', $msg, time() + 10, "sgf/{$page}", 'localhost');
    header("location: {$page}");
    exit;