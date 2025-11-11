<?php

$server = "localhost:3307";
$user = "root";
$password = "root";
$database = "aulaPHP";
$port = "3307";


$conn = new mysqli($server, $user, $password, $database, $port);

if($conn->connect_error){
    die("Erro na conão com o banco de dados" . $conn->connect_error);

}
else{
    echo("Conectado com sucesso!!");
}