<?php 
    include '../config.php';

    $id = $_GET['id'];

    // Dretório de destino
   $diretorio_destino = "../uplouds/";
   
    $q = "SELECT * FROM filmes WHERE id='$id'";
        $resultado = $conn->query($q);
        
        // num_rows é uma condição que busca se aquele valor existe
        if($resultado-> num_rows <= 0){
            echo "Usuário não encontrado";
                  
            exit();
        }
        $linha = $resultado ->fetch_assoc();

         // unlink busca o valor no banco e deleta na pasta
         unlink($diretorio_destino.$linha['foto']);

    $sql = "DELETE FROM filmes WHERE id='$id' ";
    $resultado = $conn->query($sql);

   
    header('Location: ../index.php?pagina=filmes_listar');

    
?>
