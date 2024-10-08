<?php
session_start();
include_once("connect.php");

$nome = $conn->real_escape_string($_POST['nome_cliente']);
$cpf = $conn->real_escape_string($_POST['cpf_cliente']);
$telefone = $conn->real_escape_string($_POST['telefone']);
$endereco = $conn->real_escape_string($_POST['endereco']);
$id_gerente = $_SESSION['id'];

$sql = "INSERT INTO `cliente` (`telefone`,`cpf_cliente`,`nome_cliente`,`endereço`,`id_gerente`)
    VALUES ('".$telefone."','".$cpf."','".$nome."','".$endereco."','".$id_gerente."')";

$stmt = $conn->prepare($sql);
$stmt->bind_param("");

if ($stmt->num_rows != 0) {
    $cadReturn = ['erro' => false, 'msg' => "Cliente cadastrado com sucesso!"];
}else{
    $cadReturn = ['erro' => true, 'msg' => "ERRO: Cliente não foi cadastrado!"];
}
echo json_encode($cadReturn);