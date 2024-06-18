    <h1>Filmes</h1> <br><br>
    <form action="pages/filmes_cadastro_salvar.php" method="post" enctype="multipart/form-data" >
            
            <!--Criando o formulario-->
                    <label for="titulo">Título: </label>
                    <input type="text" id="titulo" name="titulo" requerid placeholder="Digite o título do filme"> <br><br>
            
                    <label for="descricao">Descrição: </label> 
                    <input type="descricao" id="descricao" name="descricao" requerid  placeholder="Digite a descrição do filme"> <br><br>

                    <label for="ano_lancamento">Ano do lançamento: </label> 
                    <input type="date" id="ano_lancamento" name="ano_lancamento" requerid placeholder="Digite o ano do lançamento"> <br><br>
            
                    <label for="genero">Gênero: </label> 
                    <input type="text" id="genero" name="genero" placeholder="Digite o gênero do filme"><br><br>

                    <label for="classificacao">Classificação: </label> 
                    <input type="text" id="classificacao" name="classificacao" placeholder="Digite a classificação do filme" ><br><br>
                    
                    <!-- Adicionando instrução de foto do porfessor-->
                    <label for="foto">Foto: </label>
                    <input type="file" class="form-control-file" id="foto" name="foto" required>
                    <br><input type="submit" value="Enviar"><br>
            
        </form>