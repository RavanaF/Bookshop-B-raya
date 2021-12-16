<?php

include_once 'connection.php';

$nome       = $_POST['cxnome'];
$email      = $_POST['cxemail'];
$mensagem   = $_POST['cxmensagem'];


if($_POST){
    insertMensagem($nome, $email, $mensagem);
    echo "Mensagem enviada com sucesso!";
}
else {
    echo "Mensagem não enviada!";
}


function insertMensagem($nome, $email, $mensagem){
    
    $nomeTabela = "bdLivros.Contato";
    $nomeCampos = "nome, email, mensagem";
    $valores    =
    "'" .$nome. "', ".
    "'" .$email. "', ".
    "'" .$mensagem. "' ";
    $cmdSql =  "INSERT INTO ".$nomeTabela."(".$nomeCampos.") VALUES (".$valores.")";
    $conn1 = new DBConnection();
    $conn1->query($cmdSql);
    
    //return $cmdSql;
    
}
?>