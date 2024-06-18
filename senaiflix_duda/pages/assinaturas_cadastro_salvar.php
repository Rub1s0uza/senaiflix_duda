<?php 
// conectando o banco de dados
include '../config.php';

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $nome = $_POST[('nome')];
    $plano = $_POST[('plano')];
    $data_inicio = $_POST[('data_inicio')];
    $data_fim = $_POST[('data_fim')];
    $data_cadastro = date("Y-n-d H:i:s");
    $data_atualizacao = date("Y-n-d H:i:s");
    $status = 1;

    $sql = "INSERT INTO clientes (nome, plano, data_inicio, data_fim, data_cadastro,  data_atualizacao, status) VALUES 
    ('$nome', '$plano', '$data_inicio', '$data_fim', '$data_cadastro',  '$data_atualizacao', '$status')";

    if($conn->query($sql) == TRUE){
        echo "Filme cadastrado com sucesso!";
        echo "<br><br>";
        

    } else {
        echo "Erro ao inserir registro ".$conn->error;
    }

    header('Location: ../index.php?pagina=clientes_listar');
}
?>
