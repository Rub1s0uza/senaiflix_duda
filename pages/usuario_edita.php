<?php 
            // puxando a conexao com banco de dados
            include 'config.php';
                
            $id_usuario = $_GET['id_usuario'];
            $q = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
            $resultado = $conn->query($q);
            
            // num_rows é uma condição que busca se aquele valor existe
            if($resultado-> num_rows <= 0){
                echo "Usuário não encontrado";
                    
                exit();
            }
            $linha = $resultado ->fetch_assoc();
        ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <!--Conectando o css-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
         <form action="pages/usuario_edita_salvar.php?id_usuario=<?php echo $linha['id_usuario'];?>" method="post" enctype="multipart/form-data">
                <!--Criando o formulario-->
                <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $linha['nome'];?>">
                </div>
                <div class="form-group col-md-6">
                        <label for="usuario">Usuário</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $linha['usuario'];?>">
                </div>
                <div class="form-group col-md-6"> 
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $linha['email'];?>">
                </div>              
                <div class="form-group col-md-2">
                     <label for="senha">Crie uma senha</label><br>
                     <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">  
                     <input type="password" id="pass" name="senha" class="form-control" placeholder="Senha">
                </div>        


                        <!-- botao para enviar -->
                        <br><input type="submit" value="Enviar"><br>

                      
                
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


    