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
				// Evita caracteres epsciais (SQL Inject)
				$nome = $conexao -> real_escape_string($_POST['nome']);

                $sql="SELECT *
                        FROM `dados`
                        WHERE `nome`='".$nome."';";

				$resultado = $conexao->query($sql);
				
				if($resultado->num_rows != 0)
				{
					$row = $resultado -> fetch_array();
					echo 'ID: ' . $row['id'];
                    echo '<br>';
					echo 'Nome: ' . $row['nome'];
                    echo '<br>';
					echo 'Zap: ' . $row['zap'];
                    echo '<br>';
					echo 'E-Mail: ' . $row['email'];
					$conexao -> close();

                    echo '<a href="index.php">Voltar</a>';
					
					exit();
				} else {
					
					$conexao -> close();
                    echo 'Nenhum registro encontrado.';
                    echo '<a href="index.php">Voltar</a>';
				}
			}
		?>