<?php
    require_once('funcionarioRepository.php');
    $nome = filter_input(INPUT_POST, 'nomeFuncionario', FILTER_SANITIZE_SPECIAL_CHARS);
    
    header("location: listagem-de-funcionario.php?nome={$nome}");
    exit;