<?php
$server   = "localhost";
$user     = "root";
$password = "";
$database = "database_honest";

$conexao = new mysqli($server,$user,$password,$database);

if($conexao->connect_errno)
{
    echo "Erro ao conectar";
} 
?>