<?php
include_once("connect.php");

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
} else {
    session_start();
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT `id` FROM `usuarios`
WHERE `email` = '".$email."' 
    `password` = '" . hash('sha256', $password) . "';";

    $resultado = $conn->query($sql);

    if ($resultado->num_rows != 0) {
        session_start();
        $row = $resultado->fetch_array();
        $_SESSION['id_admin'] = $row[0];
        $conn->close();

        header('Location: index.php', true, 301);
        exit();
    } else {

        $conn->close();
        header('Location: index.php', true, 301);
    }
}