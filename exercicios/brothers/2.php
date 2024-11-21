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
			<form method="post" action="processamento2.php" id="formlogin" name="formlogin" >
				<label>>Nome: </label>
				<input type="text" name="nome" id="nome" size="20"><br />
				<label>>Zap: </label>
				<input type="text" name="zap" id="zap" size="20"><br />
				<label>>E-Mail: </label>
				<input type="text" name="email" id="email" size="20"><br />
				
				<br>
				<center>
					<input type="submit" value="gravar" class='botao' />
				</center>
			</form>
		</div>

    </body>
</html>