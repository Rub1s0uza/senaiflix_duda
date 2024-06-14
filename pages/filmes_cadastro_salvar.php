<?php 
// conectando o banco de dados
include '../config.php';

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $titulo = $_POST[('titulo')];
    $descricao = $_POST[('descricao')];
    $ano_lancamento = $_POST[('ano_lancamento')];
    $genero = $_POST[('genero')];
    $classificacao = $_POST [('classificacao')];
    $data_cadastro = date("Y-n-d H:i:s");
    $data_atualizacao = date("Y-n-d H:i:s");
    $status = 0;

    $sql = "INSERT INTO filmes (titulo, descricao, ano_lancamento, genero, classificacao, data_cadastro, data_atualizacao, status) VALUES 
    ('$titulo', '$descricao', '$ano_lancamento', '$genero', '$classificacao', '$data_cadastro', '$data_atualizacao', '$status')";

    if($conn->query($sql) == TRUE){
        echo "Filme cadastrado com sucesso!";
        echo "<br><br>";
        

    } else {
        echo "Erro ao inserir registro ".$conn->error;
    }
    header('Location: ../index.php?pagina=filmes_listar');
    
}
?>
