<?php

    require_once('./funcionarioRepository.php');

   
    $id = filter_input(INPUT_POST, 'idFuncionario', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

    $msg = "";
    if (fnUpdatefuncionario($id, $nome, $email, $cpf)){
        $msg = "Sucesso ao gravar";
    } else{
        $msg = "Falha na gravação";
    }

    header("location: formulario-edita-funcionario.php?notify={$msg}&id=$id");
    exit;