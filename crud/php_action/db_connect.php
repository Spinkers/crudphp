<?php
//Conexão com banco de dados
$servername = "localhost";
$username = "lucas";
$password = "40028922";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
    echo "Erro na conexão: ".mysqli_connect_error();
}