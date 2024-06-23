<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1> Editar cliente</h1> <br>

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

        <form action="pages/clientes_edita_salvar.php?id=<?php echo $linha['id'];?>" method="post">
            <!--Criando o formulario-->
            
                <div class="form-row">
                      <div class="form-group col-md-6">
                            <label for="nome">Nome: </label>
                            <input type="text" id="name" name="nome" class="form-control" requerid value="<?php echo $linha['nome'];?>">
                       </div>
                        <div class="form-group col-md-6">                        
                            <label for="email">Email: </label>
                            <input type="email" id="email" name="email" class="form-control" requerid value="<?php echo $linha['email'];?>">  <br><br>             
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                         <label for="cpf">CPF: </label>
                          <input type="text" id="cpf" name="cpf" class="form-control" value="<?php echo $linha['cpf'];?>">
                      </div>
                      <div class="form-group col-md-6">
                                <label for="telefone">Telefone: </label>
                                <input type="text" id="telefone" name="telefone" class="form-control" value="<?php echo $linha['telefone'];?>"><br><br>
                        </div>
                 </div>

                        <label for="endereco">Endereço: </label>
                        <input type="text" id="endereco" name="endereco" class="form-control" value="<?php echo $linha['endereco'];?>"><br><br>

                        <label for="bairro">Bairro: </label>
                        <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo $linha['bairro'];?>"><br><br>
  
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cicade">Cidade</label>
                        <input type="text" class="form-control" id="cicade" name="cidade" value="<?php echo $linha['cidade'];?>"  placeholder="Digite sua cidade">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado"  value="<?php echo $linha['estado'];?>" placeholder="Digite a sigla do estado">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $linha['cep'];?>" placeholder="000000-000">
                    </div>
                </div>
                             
                    <br><input type="submit" value="Enviar"><br>
            
        </form>
</body>
</html>
