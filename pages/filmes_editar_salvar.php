<?php 
// conectando o banco de dados
include '../config.php';

 // isset verifica se ta passando algo no get, com exclamação enra como se fosse falso
    // exit aborta
    if(!isset($_POST['id'])){
        echo "Usuário inválido";
        exit();
      
    }
    
    $id = $_POST['id'];

       // Salvando dados
    // use o exit caso queira que o formulario nao apareça novamente

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $titulo = $_POST[('titulo')];
    $descricao = $_POST[('descricao')];
    $ano_lancamento = $_POST[('ano_lancamento')];
    $genero = $_POST[('genero')];
    $classificacao = $_POST [('classificacao')];
    $foto = $_FILES['foto'];
    $data_atualizacao = date("Y-n-d H:i:s");


   // Dretório de destino
   $diretorio_destino = "../uplouds/";

   $q = "SELECT * FROM filmes WHERE id='$id'";
        $resultado = $conn->query($q);
        
        // num_rows é uma condição que busca se aquele valor existe
        if($resultado-> num_rows <= 0){
            echo "Usuário não encontrado";
                  
            exit();
        }
        $linha = $resultado ->fetch_assoc();

        // unlink busca o valor no banco e deleta na pasta
        unlink($diretorio_destino.$linha['foto']);

   // gera um único nome para o arquivo
   $nome_arquivo = uniqid().'_'.basename($foto["name"]);

   // caminho completo do arquivo no servidor
   $caminho_completo = $diretorio_destino.$nome_arquivo;
   
   //strtolower passa mausculo para minusculo
   // verifica a extensão do arquivo
   $extensoes_permitidas = array("jpg", "jpeg", "png");
   $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));
   
   if( !in_array($extensao, $extensoes_permitidas)){
       echo "Somente arquivos JPG, JPEG, PNG, são permitidos";
       exit;
   }

   // move o arquivo para o diretorio de destino
   if(move_uploaded_file($foto["tmp_name"], $caminho_completo)){
       echo "O arquivo foi enviado com sucesso";
   } else {
       echo "Erro ao enviar o arquivo";
   }

    $q = "UPDATE filmes SET titulo='$titulo', descricao='$descricao', ano_lancamento='$ano_lancamento', genero='$genero', classificacao='$classificacao', foto='$nome_arquivo', data_cadastro='$data_cadastro', data_atualizacao='$data_atualizacao' WHERE id='$id'";

    if($conn->query($q) == TRUE){
        echo "Filme editado com sucesso!";
        echo "<br><br>";
        

    } else {
        echo "Erro ao inserir registro ".$conn->error;
    }

    header('Location: ../index.php?pagina=filmes_listar');
}

    
?>