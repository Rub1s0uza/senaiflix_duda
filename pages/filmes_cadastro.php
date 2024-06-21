<h1>Filmes</h1> <br><br>

<form action="pages/filmes_cadastro_salvar.php" method="post" enctype="multipart/form-data" >
            
    <div class="form-group col-md-6">
                <label for="foto">Foto</label><br>
                <input type="file"  id="foto" name="foto">
    </div>
    <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título do filme">
                </div>
                <div class="form-group col-md-6"> 
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descreva o filme">
                </div>
    </div>
    <div class="form-group">
                <div class="form-row">
                        <div class="form-group col-md-2">
                                <label for="ano_lancamento">Ano de lançamento</label>
                                <input type="date" class="form-control" id="ano_lancamento" name="ano_lancamento">
                        </div> 
                        <div class="form-group col-md-4">
                                <label for="genero">Gênero</label>
                                <input type="text" class="form-control" id="genero" name="genero" placeholder="Gênero"> 
                        </div>
                        <div class="form-group col-md-6">
                                <label for="classificacao">Classificação</label>
                                <input type="text" class="form-control" id="classificacao" name="classificacao" placeholder="Classificação"> 
                        </div>
                </div>
    </div>

  <input type="submit" value="Enviar"><br>
                    
</form>
    