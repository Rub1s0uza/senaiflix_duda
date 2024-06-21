<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover</title>
</head>
<body>
    <!-- inlcuindo o header-->
    <?php include 'header.php';?>
</body>
</html>
<?php 
    include '../config.php';

    $id_usuario = $_GET['id_usuario'];

    $sql = "DELETE FROM usuarios WHERE id_usuario='$id_usuario' ";
    $resultado = $conn->query($sql);

    header('Location: ../index.php?pagina=usuario_listar');

    
?>
