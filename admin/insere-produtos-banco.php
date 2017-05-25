<?php
    include "conexao.php";
    
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];

    
    $sql = sprintf("insert into produtos (nome,descricao,preco,imagem) values ('%s','%s','%s','%s')",$nome,$descricao,$preco,$imagem);
    if(mysqli_query($conex,$sql)){
        header("location:lista-de-produtos.php");

    } else {
        echo"Erro ao inserir conversa!".mysqli_error($conex);
    }
?>