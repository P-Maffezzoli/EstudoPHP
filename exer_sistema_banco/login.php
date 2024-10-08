<?php
include 'connect.php';
session_start();
if (isset($_POST['email']) && isset($_POST['password']))
    $email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

$SQL = "SELECT `id`, `email`, `nome`
            FROM `gerentes` 
            WHERE `email` = ? AND `senha` = ?";

if ($stmt = $conn->prepare($SQL)) {
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows != 0) {
        $row = $resultado->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['nome'] = $row['nome'];
        $conn->close();
        
        header('Location: mainPage.php', true, 301);
        exit();
    } else {
        $conn->close();
        header('Location:index.php?error=Email_ou_senha_incorretos', true, 301);
    }
}