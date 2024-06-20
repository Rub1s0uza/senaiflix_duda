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
		
		<form action="pages/clientes_cadastrar_salvar.php" method="post">       
                 
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Nome</label>
            <input type="nome" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="cpf">CPF</label>
            <input type="cpf" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
            </div>
            <div class="form-group col-md-6">
            <label for="telefone">Telefone</label>
            <input type="telefone" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000">
            </div>
        </div>
        
            <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite sua rua e número">
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="cicade">Cidade</label>
            <input type="text" class="form-control" id="cicade" name="cidade" placeholder="Digite sua cidade">
            </div>
            <div class="form-group col-md-4">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite a sigla do estado">
            </div>
            <div class="form-group col-md-2">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="000000-000">
            </div>
        </div>

            <br><input type="submit" value="Enviar"><br>
        </form>
                       
	</main>
</body>
</html>