<?php 
// conectando o banco de dados
include 'config.php';

 // isset verifica se ta passando algo no get, com exclamação enra como se fosse falso
    // exit aborta
    if(!isset($_GET['id'])){
        echo "Usuário inválido";
        echo " <br>";
        echo " <br>";
        echo " <a href='lista.php'>Voltar para lista</a>";
       
        exit();
      
    }
    
    $id = $_GET['id'];

       // Salvando dados
    // use o exit caso queira que o formulario nao apareça novamente

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $nome = $_POST[('nome')];
    $email = $_POST[('email')];
    $cpf = $_POST[('cpf')];
    $telefone = $_POST[('telefone')];
    $endereco = $_POST [('endereco')];
    $bairro = $_POST[('bairro')];
    $estado = $_POST[('estado')];
    $cep = $_post[('cep')];
    $data_cadastro = date("Y-n-d H:i:s");
    $data_atualizacao = date("Y-n-d H:i:s");

    $q = "UPDATE filmes SET nome='$nome', email='$email', cpf='$cpf', telefone='$telefone', endereco='$endereco', bairro='$bairro', estado='$estado', cep='$cep',        data_cadastro='$data_cadastro', data_atualizacao='$data_atualizacao' WHERE id='$id'";

    if($conn->query($q) == TRUE){
        echo "Usuário editado com sucesso!";
        echo "<br><br>";
        

    } else {
        echo "Erro ao inserir registro ".$conn->error;
    }

    
}

    
?>