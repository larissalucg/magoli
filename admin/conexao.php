<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "magoli";
$conex = mysqli_connect($servidor, $usuario, $senha) or print(mysqli_error());
mysqli_select_db($conex, $banco) or print (mysqli_error());
?>