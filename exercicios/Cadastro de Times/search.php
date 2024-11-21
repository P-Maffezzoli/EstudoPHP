<link rel="stylesheet" href="style.css">
<?php
    $hostname = "127.0.0.1";
	$user = "root";
	$password = "";
	$database = "campdb";

	$connect = new mysqli($hostname, $user, $password, $database);
	if ($connect -> connect_errno) {
		echo "Conexão com Mysql Falhou: " . $connect -> connect_error;
		exit();
	} else {
		// Evita caracteres epsciais (SQL Inject)
		$nome = $connect -> real_escape_string($_POST['nome']);
        $sql="SELECT *
                FROM `times`
                WHERE `nome`='".$nome."';";
		$resultado = $connect->query($sql);
		
		if($resultado->num_rows != 0)
		{
			$row = $resultado -> fetch_array();
			echo 'ID: ' . $row['id'];
            echo '<br>';
			echo 'Nome: ' . $row['nome'];
            echo '<br>';
			echo 'Coach: ' . $row['coach'];
            echo '<br>';
			echo 'País: ' . $row['país'];
			echo '<br>';
			$connect -> close();
            echo '<a href="index.php">Voltar</a>';
			
			exit();
		} else {
			
			$connect -> close();
            echo 'Nenhum registro encontrado.';
            echo '<a href="index.php">Voltar</a>';
		}
	}
?>