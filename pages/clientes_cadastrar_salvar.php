<?php 
// conectando o banco de dados
include '../config.php';

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $nome = $_POST[('nome')];
    $email = $_POST[('email')];
    $cpf = $_POST[('cpf')];
    $telefone = $_POST[('telefone')];
    $endereco = $_POST[('endereco')];
    $bairro = $_POST[('bairro')];
    $estado = $_POST[('estado')];
    $cidade = $_POST[('cidade')];
    $cep = $_POST[('cep')];
    $data_cadastro = date("Y-n-d H:i:s");
    $data_atualizacao = date("Y-n-d H:i:s");
    $status = 1;

    $sql = "INSERT INTO clientes (nome, email, cpf, telefone, endereco, bairro, estado, cidade, cep, data_cadastro,  data_atualizacao, status) VALUES 
    ('$nome', '$email', '$cpf', '$telefone', '$endereco', '$bairro', '$estado', '$cidade', '$cep', '$data_cadastro',  '$data_atualizacao', '$status')";

    if($conn->query($sql) == TRUE){
        echo "Filme cadastrado com sucesso!";
        echo "<br><br>";
        

    } else {
        echo "Erro ao inserir registro ".$conn->error;
    }

    header('Location: ../index.php?pagina=clientes_listar');
}
?>

