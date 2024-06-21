<?php 
// conectando o banco de dados
include '../config.php';

// declarando as variaveis
if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $nome = $_POST[('nome')];
    $usuario = $_POST[('usuario')];
    $senha = $_POST[('senha')];
    $email = $_POST[('email')];
    $data_cadastro = date("Y-n-d H:i:s");
    $data_atualizacao = date("Y-n-d H:i:s");
    $status = 1;

    $sql = "INSERT INTO usuarios (nome, usuario, senha, email, data_cadastro,  data_atualizacao, status) VALUES 
    ('$nome', '$usuario', '$senha', '$email', '$data_cadastro', '$data_atualizacao', '$status')";

// condição que verifica se o usuario ja existe ou nao no banco
 /*   if($usuario == $usuario){
        echo "Este usuário já existe!";
        exit();
    } 
    elseif ($email == $email){
        echo "Este email já existe!";
        exit();
    }
*/
    if($conn->query($sql) == TRUE){

        echo "Uusario cadastrado com sucesso!";
        echo "<br><br>";
        

    } else {
        echo "Erro ao inserir registro ".$conn->error;
    }

    header('Location: ../index.php?pagina=usuario_listar');
}
?>
