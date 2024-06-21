<a href="index.php?pagina=assinaturas_cadastro">Escolha um plano para você e sua família</a> <br><br>
<?php 
    include 'config.php';

    $sql = "SELECT C.nome, A.plano, A.id FROM assinaturas A LEFT JOIN clientes C ON A.id_cliente = C.id";
   // $sql = $conn->query("SELECT C.nome, A.plano, A.id FROM assinaturas A LEFT JOIN clientes C ON A.id_cliente = C.id");
    // usar limit para limitar resultados
    //$sql = "SELECT * FROM assinaturas ORDER BY id asc";
    $resultado = $conn->query($sql);

?>

<table border="1" widht='50%' class="table">
    <tr>
        <th scope="col">Cliente</th>
        <th scope="col">Plano</th>
        <th scope="col">Editar</th>
        <th scope="col">Remover</th>

    </tr>


<?php 
//var_dump($resultado->fetch_assoc()); exit();
    while($linha = $resultado->fetch_assoc()){

        echo 
        "<tr>
            <td>".$linha['nome']."</td>
            <td>".$linha['plano']."</td>
            <td><a href='index.php?pagina=assinaturas_edita&id=".$linha['id']."'>Editar</td>
            <td><a href='pages/assinaturas_remover.php?id=".$linha['id']."'>Remover</a></td>
        </tr>";
    }
?>
   
</table>


<br>