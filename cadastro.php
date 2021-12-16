<?php 
include_once 'connection.php';

$nome     = $_POST['cxnome'];
$telefone = $_POST['cxtelefone'];
$email    = $_POST['cxemail'];

//insertDadosUsuarios($nome, $telefone, $email);

if($_POST){
    insertDadosUsuarios($nome, $telefone, $email);
    echo "Cadastro realizado com sucesso!";
}
else {
    echo "Cadastro não realizado!";
}


function insertDadosUsuarios($nome, $telefone, $email){
    
    $nomeTabela = "bdLivros.Cliente";
    $nomeCampos = "nome, telefone, email";
    $valores    =
    "'" .$nome. "', ".
    "'" .$telefone. "', ".
    "'" .$email. "' ";
    $cmdSql =  "INSERT INTO ".$nomeTabela."(".$nomeCampos.") VALUES (".$valores.")";
    $conn1 = new DBConnection();
    $conn1->query($cmdSql);
    
    //return $cmdSql;
    
}

?>