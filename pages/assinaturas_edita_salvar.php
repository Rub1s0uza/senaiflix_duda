<?php 
// conectando o banco de dados
include '../config.php';

 // isset verifica se ta passando algo no get, com exclamação enra como se fosse falso
    // exit aborta
    if(!isset($_GET['id'])){
        echo "Assinatura inválida";
        
       
        exit();
      
    }
    
    $id = $_GET['id'];

       // Salvando dados
    // use o exit caso queira que o formulario nao apareça novamente

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $id_cliente = $_POST['id_cliente'];
    $plano = $_POST['plano'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $data_cadastro = date("Y-n-d H:i:s");
    $data_atualizacao = date("Y-n-d H:i:s");

    $q = "UPDATE assinaturas SET id_cliente='$id_cliente', plano='$plano', data_inicio='$data_inicio', data_fim='$data_fim', data_cadastro='$data_cadastro', data_atualizacao='$data_atualizacao' WHERE id='$id'";

    if($conn->query($q) == TRUE){
        echo "AAsinatura editada com sucesso!";
        echo "<br><br>";
        

    } else {
        echo "Erro ao inserir registro ".$conn->error;
    }

    header('Location: ../index.php?pagina=assinaturas_listar');
    
}


    
?>