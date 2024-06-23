<?php 
        // puxando a conexao com banco de dados
        include 'config.php';
            
         $id = $_GET['id'];
        $q = "SELECT * FROM filmes WHERE id='$id'";
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
 </head>
 <body>
    <h1>Editar filme</h1>

         <!--Criando formulario-->
         <form action="pages/filmes_editar_salvar.php?id=<?php echo $linha['id'];?>" method="post" enctype="multipart/form-data">
     
            <div class="form-group col-md-6">
                  <label for="foto">Foto</label><br>
                   <input type="file"  id="foto" name="foto">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                     <label for="titulo">Título</label>
                     <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $linha['titulo'];?>" placeholder="Digite o título do filme">
                </div>
                <div class="form-group col-md-6"> 
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $linha['descricao'];?>" placeholder="Descreva o filme">
                </div>
            </div>
            <div class="form-group">
                 <div class="form-row">
                       <div class="form-group col-md-2">
                            <label for="ano_lancamento">Ano de lançamento</label>
                            <input type="date" class="form-control" id="ano_lancamento" name="ano_lancamento" value="<?php echo $linha['descricao'];?>"> 
                        </div> 
                        <div class="form-group col-md-4">
                            <label for="genero">Gênero</label>
                            <input type="text" class="form-control" id="genero" name="genero"  value="<?php echo $linha['genero'];?>" placeholder="Gênero"> 
                        </div>
                        <div class="form-group col-md-6">
                             <label for="classificacao">Classificação</label>
                             <input type="text" class="form-control" id="classificacao" name="classificacao" value=" <?php echo $linha['id'];?>"  placeholder="Classificação"> 
                        </div>
                    </div>
                </div>
                         <!-- botao para enviar -->
                         <br><input type="submit" value="Enviar"><br>
                 
             </form>
     
 </body>
 </html>
 