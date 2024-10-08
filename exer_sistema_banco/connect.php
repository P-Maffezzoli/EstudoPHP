<?php
$hostname= "127.0.0.1";
$user="root";
$pass="";
$database= "banco_db";

$conn = new mysqli($hostname,$user,$pass,$database);

if ($conn->connect_error) {
    echo "Erro ao conectar com o banco de dados.".$conn->connect_error;
    exit();
}


