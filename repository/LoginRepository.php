<?php

require_once ('Connection.php');



function fnAddFuncionario($nome, $email, $cpf){
    $con = getConnection();
   
   
    $sql = "insert into funcionario (nome, email, cpf) values (:pNome, :pEmail, :pCpf)";
   
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pNome", $nome);
    $stmt->bindParam(":pEmail", $email);
    $stmt->bindParam(":pcpf", $cpf);

    return $stmt->execute();
}

function fnListFuncionarios(){
    $con = getConnection();

    $sql = "select*from funcionario";

    $result = $con->query($sql);

    $lstfuncionarios = array();
    while($funcionario = $result->fetchObject(PDO::FETCH_OBJ)){
       array_push($lstfuncionarios, $funcionario);
    }
    return $lstfuncionarios;
}

function fnLocalizaFuncionariosporId($id){
    $con = getConnection();

    $sql = "select*from funcionario where id = :pID";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);
  
    if($stmt->execute()) {
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
  return null;
}
function fnUpdateFuncionario($id, $nome, $email, $cpf){
    $con = getConnection();
   
   
    $sql = "update funcionario set nome = :pNome , email = :pEmail , cpf = :pCpf where id = :pID";
   
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);
    $stmt->bindParam(":pNome", $nome);
    $stmt->bindParam(":pEmail", $email);
    $stmt->bindParam(":pcpf", $cpf);

    return $stmt->execute();
}
function fnDeleteFuncionario($id){
    $con = getConnection();
   
   
    $sql = "delete from funcionario where id = :pID";
   
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);

    return $stmt->execute();
}
function fnLogin($email, $senha){
    $con = getConnection();
   
   
    $sql = "select id, email, created_at as createdAt from login where email = :pEmail and senha = :pSenha";
   
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pEmail", $email);
    $stmt->bindValue(":pSenha", md5($senha));

    if($stmt->execute()){
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    return null;
}