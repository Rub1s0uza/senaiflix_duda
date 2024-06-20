<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Página para o formulário de edição de clientes</h1>

    <form action="pages/clientes_edita_salvar.php" method="post">
        <?php 
            // puxando a conexao com banco de dados
            include 'config.php';
            // puxando as informações do banco
            $id = $_GET['id'];
            $q = "SELECT * FROM clientes WHERE id='$id'";
            $resultado = $conn->query($q);
            
            // num_rows é uma condição que busca se aquele valor existe
            if($resultado-> num_rows <= 0){
                echo "Usuário não encontrado";
                    
                exit();
            }
            $linha = $resultado ->fetch_assoc();
        ?>
            <!--Criando o formulario-->
                    <label for="nome">Nome: </label>
                    <input type="text" id="name" name="nome" requerid value="<?php echo $linha['nome'];?>"><br><br>
            
                    <label for="email">Email: </label> 
                    <input type="email" id="email" name="email" requerid value="<?php echo $linha['email'];?>">  <br><br>
            
                    <label for="cpf">CPF: </label> 
                    <input type="text" id="cpf" name="cpf" value="<?php echo $linha['cpf'];?>"> <br><br>

                    <label for="telefone">Telefone: </label> 
                    <input type="text" id="telefone" name="telefone" value="<?php echo $linha['telefone'];?>"><br><br>
            
                    <label for="endereco">Endereço: </label> 
                    <input type="text" id="endereco" name="endereco" value="<?php echo $linha['nome'];?>"><br><br>

                    <label for="estado">Estado: </label> 
                    <input type="text" id="estado" name="estado" value="<?php echo $linha['estado'];?>"><br><br>
            
                    <label for="cidade">Cidade: </label> 
                    <input type="text" id="cidade" name="cidade" value="<?php echo $linha['cidade'];?>"><br><br>
            
                    <label for="cep">CEP: </label> 
                    <input type="text" id="cep" name="cep" value="<?php echo $linha['cep'];?>"><br><br>
            
                                   
                    <br><input type="submit" value="Enviar"><br>
            
        </form>
</body>
</html>
