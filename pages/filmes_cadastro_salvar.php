<?php 
// conectando o banco de dados
include '../config.php';

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $ano_lancamento = $_POST['ano_lancamento'];
    $genero = $_POST[('genero')];
    $classificacao = $_POST ['classificacao'];
    $foto = $_FILES['foto'];
    //var_dump($foto); exit();
    $data_cadastro = date("Y-n-d H:i:s");
    $data_atualizacao = date("Y-n-d H:i:s");
    $status = 0;

    // Dretório de destino
    $diretorio_destino = "../uplouds/";

    // gera um único nome para o arquivo
    $nome_arquivo = uniqid().'_'.basename($foto["name"]);

    // caminho completo do arquivo no servidor
    $caminho_completo = $diretorio_destino.$nome_arquivo;
    
    //strtolower passa mausculo para minusculo
    // verifica a extensão do arquivo
    $extensoes_permitidas = array("jpg", "jpeg", "png");
    $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));
    
    if(!in_array($extensao, $extensoes_permitidas)){
        echo "Somente arquivos JPG, JPEG, PNG, são permitidos";
        exit;
    }

    // move o arquivo para o diretorio de destino
    if(move_uploaded_file($foto["tmp_name"], $caminho_completo)){
        echo "O arquivo foi enviado com sucesso";
    } else {
        echo "Erro ao enviar o arquivo";
    }

    $sql = "INSERT INTO filmes (titulo, descricao, ano_lancamento, genero, classificacao, foto, data_cadastro, data_atualizacao, status) VALUES ('$titulo', '$descricao', '$ano_lancamento', '$genero', '$classificacao', '$nome_arquivo', '$data_cadastro', '$data_atualizacao', '$status')";

    if($conn->query($sql) == TRUE){
        echo "Filme cadastrado com sucesso!";
        echo "<br><br>";
        

    } else {
        echo "Erro ao inserir registro ".$conn->error;
    }
    header('Location: ../index.php?pagina=filmes_listar');
    
}
?>
