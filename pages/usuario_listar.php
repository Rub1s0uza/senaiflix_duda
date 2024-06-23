<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
<a href="index.php?pagina=usuario_cadastro">Cadastrar usuário</a><br><br>

<a href="pages/logout.php">Sair</a>
</body>
</html>
<?php 
    include 'config.php';

    // usar limit para limitar resultados
    $sql = "SELECT * FROM usuarios ORDER BY id asc";
    $resultado = $conn->query($sql);

?>

<table border="1" widht='50%' class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Editar</th>
            <th scope="col">Remover</th>

        </tr>
    </thead>

<?php 
    while($linha = $resultado->fetch_assoc()){
        
        echo 
        "<tr>
            <td>".$linha['id']."</td>
            <td>".$linha['nome']."</td>
            <td>".$linha['email']."</td>
            <td><a href='index.php?pagina=usuario_edita&id=".$linha['id']."'>Editar</td>
            <td><a href='pages/usuario_remover.php?id=".$linha['id']."'>Remover</a></td>
        </tr>";
    }
?>
   
</table>

<br>