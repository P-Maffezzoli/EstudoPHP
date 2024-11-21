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
	$password = $conexao->real_escape_string($_POST['password']);

	$sql = "SELECT `id` FROM `userdata`
			WHERE `useremail` = '" . $useremail . "'
			AND `password` = '" . hash('sha256', $password) . "';";

	$resultado = $conexao->query($sql);

	if ($resultado->num_rows != 0) {
		session_start();
		$row = $resultado->fetch_array();
		$_SESSION['id'] = $row[0];
		$conexao->close();

		header('Location: site.php', true, 301);
		exit();
	} else {

		$conexao->close();
		header('Location: index.php', true, 301);
	}
}
