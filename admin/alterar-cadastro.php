<?php
        
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
    include "conexao.php";

    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];

    $sqlUpdate = sprintf(("UPDATE produtos SET nome = '%s', descricao = '%s', preco = '%s', imagem = '%s' where id = '%s' "), $nome, $descricao, $preco, $imagem, $id);

    //die(var_dump($sqlUpdate));
    
     if(mysqli_query($conex,$sqlUpdate)){
        header("location:lista-de-produtos.php");
    } else {
        echo"Erro!".mysqli_error($conex);
    }
    }
?>    