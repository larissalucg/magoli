<?php
    
    include "conexao.php";

    $id = $_GET["id"];

    
    $sqlDelete = sprintf(("delete from produtos where id='$id'"));

    //die(var_dump($sqlDelete));
    
     if(mysqli_query($conex,$sqlDelete)){
        header("location:lista-de-produtos.php");
    } else {
        echo"Erro!".mysqli_error($conex);
    }
    
?>    