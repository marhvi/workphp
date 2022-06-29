<?php

    require_once('./funcionarioRepository.php');

    session_start();
    
  
    if (fnDeleteFuncionario($_SESSION['id'])){
        $msg = "Sucesso ao apagar";
    } else{
        $msg = "Falha ao apagar";
    }
    
    unset($_SESSION['id']);

    $page = "listagem-de-funcionario.php";  
    setcookie('notify', $msg, time()+10, "/repository/{$page}", 'localhost');
    header("location: {$page}"); 
    exit;