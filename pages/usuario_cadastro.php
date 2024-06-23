<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <!--Conectando o css-->
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <h1>Cadastro de usuário</h1> <br><br> 

        <!--Criando o formulario de cadastro -->
        <form action="pages/usuario_cadastro_salvar.php" method="post">
            
    
                <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome">
                </div>
                <div class="form-group col-md-6">
                        <label for="usuario">Usuário</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite o seu nome">
                </div>
                <div class="form-group col-md-6"> 
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                </div>              
                <div class="form-group col-md-2">
                     <label for="senha">Crie uma senha</label><br>
                     <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">  
                     <input type="password" id="pass" name="senha" class="form-control" placeholder="Senha">
                </div>
               
                <input type="submit" value="Enviar"><br>
                    
</form>
</body>
</html>

<script>
        // colocando interação no olho para ver a senha

        document.getElementById('olho').addEventListener('mousedown', function() {
        document.getElementById('pass').type = 'text';
        });

        document.getElementById('olho').addEventListener('mouseup', function() {
        document.getElementById('pass').type = 'password';
        });

        // Para que o password não fique exposto apos mover a imagem.
        document.getElementById('olho').addEventListener('mousemove', function() {
        document.getElementById('pass').type = 'password';
        });

</script>