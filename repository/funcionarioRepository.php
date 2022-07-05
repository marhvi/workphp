<?php

require_once ('Connection.php');



function fnAddFuncionario($nome, $foto, $email, $cpf) {
        
    $con = getConnection();
    $sql = "insert into funcionario (nome, foto, email, cpf) values (:pNome, :pFoto, :pEmail, :pCpf)";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pNome", $nome); 
    $stmt->bindParam(":pFoto", $foto); 
    $stmt->bindParam(":pEmail", $email); 
    $stmt->bindParam(":pCpf", $cpf); 
    
    return $stmt->execute();
}

function fnListFuncionarios(){
    $con = getConnection();

    $sql = "select*from funcionario";

    $result = $con->query($sql);

    $lstFuncionario = array();
    while($funcionario = $result->fetch(PDO::FETCH_OBJ)){
       array_push($lstFuncionario, $funcionario);
    }

    return $lstFuncionario;
}

function fnLocalizaFuncionariosPorNome($nome){
    $con = getConnection();

    $sql = "select*from funcionario where nome like :pNome";

    $stmt = $con->prepare($sql);
    $stmt->bindValue(":pNome","%{$nome}%");

    if($stmt->execute()) {
     $stmt->setFetchMode(PDO::FETCH_OBJ);
     return $stmt->fetchAll();
    }

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
function fnUpdateFuncionario($id, $nome, $foto, $email, $cpf) {
    $con = getConnection();
            
    $sql = "update funcionario set nome = :pNome, foto = :pFoto, email = :pEmail, cpf = :pCpf where id = :pID";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id); 
    $stmt->bindParam(":pNome", $nome);
    $stmt->bindParam(":pFoto", $foto);  
    $stmt->bindParam(":pEmail", $email); 
    $stmt->bindParam(":pCpf", $cpf); 
    
    return $stmt->execute();
}
function fnDeleteFuncionario($id){
    $con = getConnection();
   
   
    $sql = "delete from funcionario where id = :pID";
   
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);

    return $stmt->execute();
}
