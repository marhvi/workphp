<?php

    require_once('./funcionarioRepository.php');

   
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    
  
    if (fnDeleteFuncionario($id)){
        $msg = "Sucesso ao apagar";
    } else{
        $msg = "Falha ao apagar";
    }

    header("location: listagem-de-funcionario.php?notify={$msg}");
    exit;