<?php 
include 'config.php';
// puxando clientes ativos do banco de dados
$resultado_clientes = $conn->query("SELECT * FROM clientes WHERE status=1");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinatura</title>
</head>
<body>
    <h1>Assinaturas</h1><br>
    <form action="pages/assinaturas_cadastro_salvar.php"  method= "post"> 
<!--Utilizando formulario bootstrap-->
    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="id_cliente">Cliente</label>
                <select name="id_cliente" id="id_cliente" class="form-control" required>
                    <?php while($cliente = $resultado_clientes->fetch_assoc()):?>
                        <option value="<?php echo $cliente['id']; ?>"><?php echo $cliente['nome'];?></option> 
                        <?php endwhile; ?>

                </select>
               
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
            </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-4">
                <label for="plano">Plano</label>
                <select id="plano" class="form-control" name="plano">
                    <option selected>Escolha um plano</option>
                    <option>Família</option>
                    <option>Solitario</option>
                </select>
            </div>
    </div>
    <div class="form-group">
        <label for="data_inicio">Data da assinatura</label>
        <input type="date" class="form-control" id="data_inicio" name="data_inicio" >
    </div>
    <div class="form-group">
        <label for="data_fim">Fim da assinatura</label>
        <input type="date" class="form-control" id="data_fim" name="data_fim" >
    </div>
 
    <!-- Com o submit mandamos para a outra pasta-->
    <input type="submit" value="Enviar">
</form>
 
</body>
</html>