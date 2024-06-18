<?php 
    include '../config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM filmes WHERE id='$id' ";
    $resultado = $conn->query($sql);

    header('Location: ../index.php?pagina=filmes_listar');

    
?>
