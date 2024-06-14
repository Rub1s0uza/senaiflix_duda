    <h1>Página para o formulário de edição de filmes</h1>
    <form action="pages/filmes_editar_salvar.php" method="post">
            
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
            <!--Criando o formulario-->
                    <label for="titulo">Título: </label>
                    <input type="titulo" id="titulo" name="titulo" requerid value="<?php echo $linha['titulo'];?>"> <br><br>
            
                    <label for="descricao">Descrição: </label>
                    <input type="descricao" id="descricao" name="descricao" requerid value="<?php echo $linha['descricao'];?>"> <br><br>
                   

                    <label for="ano_lancamento">Ano do lançamento: </label> 
                    <input type="date" id="ano_lancamento" name="ano_lancamento" requerid value="<?php echo $linha['ano_lancamento'];?>"> <br><br>
            
                    <label for="genero">Gênero: </label> 
                    <input type="text" id="genero" name="genero"  value="<?php echo $linha['genero'];?>"><br><br>

                    <label for="classificacao">Classificação: </label> 
                    <input type="text" id="classificacao" name="classificacao" value=" <?php echo $linha['classificacao'];?>" ><br><br>
                    <input type='hidden' name ='id' value=" <?php echo $linha['id'];?>" >
                    <br><input type="submit" value="Enviar"><br>
            
        </form>
