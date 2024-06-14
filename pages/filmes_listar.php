<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
</head>
<body>
<a href="index.php?pagina=filmes_cadastro">Cadastrar Filmes</a><br><br>
</body>
</html>
<?php 
    include 'config.php';

    // usar limit para limitar resultados
    $sql = "SELECT * FROM filmes ORDER BY titulo asc";
    $resultado = $conn->query($sql);

?>

<table border="1" widht='50%' class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Ano de lançamento</th>
            <th scope="col">Gênero</th>
            <th scope="col">Classificação</th>
            <th scope="col">Descrição</th>
            <th scope="col">Editar</th>
            <th scope="col">Remover</th>

        </tr>
    </thead>

<?php 
    while($linha = $resultado->fetch_assoc()){
        
        echo 
        "<tr>
            <td>".$linha['id']."</td>
            <td>".$linha['titulo']."</td>
            <td>".$linha['ano_lancamento']."</td>
            <td>".$linha['genero']."</td>
            <td>".$linha['classificacao']."</td>
            <td>".$linha['descricao']."</td>
            <td><a href='index.php?pagina=filmes_editar&id=".$linha['id']."'>Editar</td>
            <td><a href='pages/filmes_remover.php?id=".$linha['id']."'>Remover</a></td>
        </tr>";
    }
?>
   
</table>

<br>