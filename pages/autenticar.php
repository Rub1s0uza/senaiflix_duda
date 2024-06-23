<?php
//session_start();
include '../config.php';

// verificando se as variaveis existem e estão preenchidas
if(isset($_POST['usuario']) && isset($_POST['senha'])) {

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // verificando se a variavel foi preenchida em branco
    if(strlen($usuario) == 0){
        echo "Seu usuário não foi preenchido!";
    } elseif (strlen($senha) == 0){
        echo "Sua senha não foi preenchida!";
    } else {
        
        // Verifica e pega o usuário e a senha diretamente na consulta SQL
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
        $resultado = $conn->query($sql) or die("Falha na execução do código SQL: " . $conn->error);

        if ($resultado->num_rows > 0) {
            $linha = $resultado->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            
            $_SESSION['id'] = $linha['id'];
            $_SESSION['nome'] = $linha['nome'];
            
            header('Location: ../index.php');
            exit();
       
        } else {
            echo "Falha ao logar! Usuário ou senha inválidos!";
        }
    }
} else {
    echo "Usuário ou senha não foram enviados.";
    
} 


?>