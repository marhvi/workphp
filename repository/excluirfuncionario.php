<?php

    require_once('./funcionarioRepository.php');

   
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    
  
    if (fnDeleteFuncionario($id)){
        $msg = "Sucesso ao apagar";
    } else{
        $msg = "Falha ao apagar";
    }
    $page = "listagem-de-funcionario.php";  
    setcookie('notify', $msg, time()+10, "/sgf/{$page}", 'localhost');
    header("location: {$page}"); 
    exit;