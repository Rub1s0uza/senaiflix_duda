<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "senaiflix_maria";

     // conecção arquivo com o banco
     $conn = new mysqli($servidor, $usuario, $senha, $banco);

     // Verificando a conecção
     if ($conn -> connect_error){
        die ("erro conecção");
    }

?>