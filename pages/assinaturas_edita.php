<?php 
            // puxando a conexao com banco de dados
            include 'config.php';
            // puxando as informações do banco
            $id = $_GET['id'];
            $q = "SELECT C.nome, A.plano, A.id, A.data_inicio, A.data_fim FROM assinaturas A LEFT JOIN clientes C ON A.id_cliente = C.id WHERE A.id='$id'";
            $resultado = $conn->query($q);
            
            // num_rows é uma condição que busca se aquele valor existe
            if($resultado-> num_rows <= 0){
                echo "Assinatura não encontrada";
                    
                exit();
            }
            $linha = $resultado ->fetch_assoc();
        ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    
    <form action="pages/assinaturas_edita_salvar.php?id=<?php echo $linha['id'];?>" method="post">
       
            <!--Criando o formulario-->
                    <div class="form-group col-md-4">
                        <label for="id_cliente">Nome: </label>
                        <input type="text" id="id_cliente" class="form-control" name="id_cliente" requerid value="<?php echo $linha['nome'];?>"><br><br>
                        
                        <label for="plano">Plano: </label>
                        <select id="plano" class="form-control" name="plano" required >
                            <option selected>Escolha um plano</option>
                            <option>Família</option> <br>
                            <option>Solitario</option> <br>
                        </select> <br>
                        
                        <label for="data_inicio">Data da assinatura: </label>
                        <input type="date" id="data_inicio" class="form-control" name="data_inicio" value="<?php echo $linha['data_inicio'];?>"> <br><br>
                        
                        <div class="form-group">
       
                        <label for="data_fim">Fim da assinatura</label>
                        <input type="date" class="form-control" id="data_fim" name="data_fim" value="<?php echo $linha['data_fim'];?>" > 
 
                        <br><input type="submit" value="Enviar"><br>
                    </div>
        </form>
</body>
</html>
