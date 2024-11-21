<?php
			
			$hostname = "127.0.0.1";
			$user = "root";
			$password = "usbw";
			$database = "alunos";
		
			$conexao = new mysqli($hostname, $user, $password, $database);

			if ($conexao -> connect_errno) {
				echo "Failed to connect to MySQL: " . $conexao -> connect_error;
				exit();
			} else {
				// Evita caracteres especiais (SQL Inject)
				$nome = $conexao -> real_escape_string($_POST['nome']);
				$zap = $conexao -> real_escape_string($_POST['zap']);
				$email = $conexao -> real_escape_string($_POST['email']);

                $sql="INSERT INTO `dados`
						(`nome`, `zap`, `email`)
						VALUES
							('".$nome."', '".$zap."', '".$email."')";

				$resultado = $conexao->query($sql);
				
				$conexao -> close();
                echo 'Cadastrado com sucesso.';
                echo '<a href="index.php">Voltar</a>';
				exit();
			}
		?>