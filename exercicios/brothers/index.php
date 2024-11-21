<html>
    <head>
        <title>Meu simples site...</title>

    </head>

	<style>
		.divLogin{
			border: 1px solid #969696;
			width: 30%;
		}
		.botao{
			background-color: red;
		}
	</style>
	
    <body>

		<div class="divLogin">
			<form method="post" action="processamento.php" id="formlogin" name="formlogin" >
				<label>>Nome: </label>
				<input type="text" name="nome" id="nome" size="20"><br />
				
				<br>
				<center>
					<input type="submit" value="pesquisar" class='botao' />
					<a href="2.php">cadastrar</a>
				</center>
			</form>
		</div>

    </body>
</html>