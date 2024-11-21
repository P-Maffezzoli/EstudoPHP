<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Meu simples site...</title>

</head>

<body>

	<div class="divSignup">
		<center>
			<form method="post" action="cadastrarUsuario.php" id="formlogin" name="formlogin">
				<label>>E-Mail: </label>
				<input type="text" name="useremail" id="useremail" size="20"><br />
				<label>>Nome de usuário</label>
				<input type="text" name="username" id="username" size="20"><br />
				<label>>Senha: </label>
				<input type="password" name="password" id="password" size="20"><br />

				<input type="submit" value="CADASTRAR" class='botaosignup' />
			</form>
		</center>
	</div>
	<center>
		<h1>bazingas</h1> <img src="img/bisnaga.jpeg">
	</center>
	<div class="divLogin">
		<center>
			<form method="post" action="verificaLogin.php" id="formlogin" name="formlogin">
				<label>>E-Mail: </label>
				<input type="text" name="useremail" id="useremail" size="20"><br />
				<label>>Senha: </label>
				<input type="password" name="password" id="password" size="20"><br />

				<input type="submit" value="LOGAR" class='botaoLogin'>
			</form>
		</center>
	</div>

</body>

</html>