<?php 
require_once('./funcionarioRepository.php'); 
 
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); 
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT); 

 if (fnAddFuncionario($nome, $email, $cpf)){ 
    $msg = "Sucesso ao gravar";
} 
    else{ $msg = "Falha na gravação"; 
}
 
  $page = "formulario-cadastro-funcionario.php";  
  setcookie('notify', $msg, time()+10, "/sgf/{$page}", 'localhost');
  header("location: {$page}"); 
  exit;
