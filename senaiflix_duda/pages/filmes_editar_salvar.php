<?php 
// conectando o banco de dados
include '../config.php';

 // isset verifica se ta passando algo no get, com exclamação enra como se fosse falso
    // exit aborta
    if(!isset($_POST['id'])){
        echo "Usuário inválido";
        exit();
      
    }
    
    $id = $_POST['id'];

       // Salvando dados
    // use o exit caso queira que o formulario nao apareça novamente

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $titulo = $_POST[('titulo')];
    $descricao = $_POST[('descricao')];
    $ano_lancamento = $_POST[('ano_lancamento')];
    $genero = $_POST[('genero')];
    $classificacao = $_POST [('classificacao')];
    $data_atualizacao = date("Y-n-d H:i:s");

    $q = "UPDATE filmes SET titulo='$titulo', descricao='$descricao', ano_lancamento='$ano_lancamento', genero='$genero', classificacao='$classificacao', data_cadastro='$data_cadastro', data_atualizacao='$data_atualizacao' WHERE id='$id'";

    if($conn->query($q) == TRUE){
        echo "Filme editado com sucesso!";
        echo "<br><br>";
        

    } else {
        echo "Erro ao inserir registro ".$conn->error;
    }

    header('Location: ../index.php?pagina=filmes_listar');
}

    
?>