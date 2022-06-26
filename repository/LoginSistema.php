<?php

    session_start();
    require_once('LoginRepository.php');

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
    

    $page = "errorPage.php?notify=acesso-negado";  
  
    if ($_SESSION['login']=fnLogin($email, $senha)){
        $page = "home.php";  
    }

    header ("location: {$page}");
    exit;