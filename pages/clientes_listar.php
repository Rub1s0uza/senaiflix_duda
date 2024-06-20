<a href="index.php?pagina=clientes_cadastro">Cadastre-se</a> <br><br>
<?php 
    include 'config.php';

    // usar limit para limitar resultados
    $sql = "SELECT * FROM clientes ORDER BY id asc";
    $resultado = $conn->query($sql);

?>

<table border="1" widht='50%' class="table">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">CPF</th>
        <th scope="col">Telefone</th>
        <th scope="col">Endereço</th>
        <th scope="col">Bairro</th>
        <th scope="col">Estado</th>
        <th scope="col">Cidade</th>
        <th scope="col">CEP</th>
        <th scope="col">Editar</th>
        <th scope="col">Remover</th>

    </tr>


<?php 
    while($linha = $resultado->fetch_assoc()){

        echo 
        "<tr>
            <td>".$linha['id']."</td>
            <td>".$linha['nome']."</td>
            <td>".$linha['email']."</td>
            <td>".$linha['cpf']."</td>
            <td>".$linha['telefone']."</td>
            <td>".$linha['endereco']."</td>
            <td>".$linha['bairro']."</td>
            <td>".$linha['estado']."</td>
            <td>".$linha['cidade']."</td>
            <td>".$linha['cep']."</td>
            <td><a href='index.php?pagina=clientes_edita&id=".$linha['id']."'>Editar</td>
            <td><a href='pages/clientes_remover.php?id=".$linha['id']."'>Remover</a></td>
        </tr>";
    }
?>
   
</table>


<br>