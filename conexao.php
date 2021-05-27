<?php

$servername = "localhost"; //padrão - server local
$database = "db_estoque"; //nome do banco de dados 
$username = "root"; //padrão - root
$password = ""; //senha de conexão do banco de dados

//criar conexão
$conexao = mysqli_connect($servername, $username, $password, $database);

?>