<?php

$hostname = "127.0.0.1";
$user = "root";
$password = "";
$database = "usuarios";

$conexao = new mysqli($hostname, $user, $password, $database);

if ($conexao->connect_errno) {
	echo "Failed to connect to MySQL: " . $conexao->connect_error;
	exit();
} else {
	// Evita caracteres especiais (SQL Inject)

	$useremail = $conexao->real_escape_string($_POST['useremail']);
	$username = $conexao->real_escape_string($_POST['username']);
	$password = $conexao->real_escape_string($_POST['password']);


	$sql = "INSERT INTO `userdata`
							(`useremail`, `username`, `password`)
						VALUES
							('" . $useremail . "','" . $username . "', '" . hash('sha256', $password) . "')";


	$resultado = $conexao->query($sql);

	$conexao->close();
	header('Location: index.php', true, 301);
	exit();
}
