<?php 
// conectando o banco de dados
include '../config.php';

 // isset verifica se ta passando algo no get, com exclamação enra como se fosse falso
    // exit aborta
    if(!isset($_GET['id'])){
        echo "Usuário inválido";
        
       
        exit();
      
    }
    
    $id = $_GET['id'];

       // Salvando dados
    // use o exit caso queira que o formulario nao apareça novamente

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $nome = $_POST[('nome')];
    $usuario = $_POST[('usuario')];
    $senha = $_POST[('senha')];
    $email = $_POST[('email')];
    $data_cadastro = date("Y-n-d H:i:s");
    $data_atualizacao = date("Y-n-d H:i:s");
    $status = 1;

    $q = "UPDATE usuarios SET nome='$nome', usuario='$usuario', senha='$senha', email='$email', data_cadastro='$data_cadastro', data_atualizacao='$data_atualizacao' WHERE id='$id'";

    if($conn->query($q) == TRUE){
        echo "Usuário editado com sucesso!";
        echo "<br><br>";
        

    } else {
        echo "Erro ao inserir registro ".$conn->error;
    }

    header('Location: ../index.php?pagina=usuario_listar');
    
    
}

    
?>