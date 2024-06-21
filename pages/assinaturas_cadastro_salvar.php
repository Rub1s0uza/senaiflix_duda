<?php 
// conectando o banco de dados
include '../config.php';

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

  
    $id_cliente = $_POST['id_cliente'];
    $plano = $_POST['plano'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $data_cadastro = date("Y-n-d H:i:s");
    $data_atualizacao = date("Y-n-d H:i:s");
    $status = 1;

    $sql = "INSERT INTO assinaturas (id_cliente, plano, data_inicio, data_fim, data_cadastro,  data_atualizacao, status) VALUES 
    ('$id_cliente','$plano', '$data_inicio', '$data_fim', '$data_cadastro',  '$data_atualizacao', '$status')";

    if($conn->query($sql) == TRUE){
        echo "Assinatura concluída com sucesso!";
        
        

    } else {
        echo "Erro ao inserir assinatura ".$conn->error;
    }

    header('Location: ../index.php?pagina=assinaturas_listar');
    
}
?>
