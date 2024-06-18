<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Página para o formulário de cadastro de clientes.</h1>
    <main>
		<h1> Cadastro </h1>
		<form action="pages/clientes_cadastrar_salvar.php" method="post">
            
            <!--Criando o formulario-->
                    <label for="nome">Nome: </label>
                    <input type="text" id="name" name="nome" requerid> <br><br>
            
                    <label for="email">Email: </label> 
                    <input type="email" id="email" name="email" requerid> <br><br>
            
                    <label for="cpf">CPF: </label> 
                    <input type="text" id="cpf" name="cpf" requerid ><br><br>

                    <label for="telefone">Telefone: </label> 
                    <input type="text" id="telefone" name="telefone" ><br><br>
            
                 <!--Usar table-->
                    <label for="endereco">Endereço: </label> 
                    <input type="text" id="endereco" name="endereco" ><br><br>

                    <label for="bairro">Bairro: </label> 
                    <input type="text" id="bairro" name="bairro" ><br><br>

                    <label for="estado">Estado: </label> 
                    <input type="text" id="estado" name="estado" ><br><br>
            
                    <label for="cidade">Cidade: </label> 
                    <input type="text" id="cidade" name="cidade" ><br><br>
            
                    <label for="cep">CEP: </label> 
                    <input type="text" id="cep" name="cep" ><br><br>
            
                    
                
                    <br><input type="submit" value="Enviar"><br>
                    
                        </form>
	</main>
</body>
</html>