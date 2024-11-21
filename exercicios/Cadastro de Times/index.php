<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Sitezin toppers</title>
</head>
<body>
    <center>
    <div class="login">
        <form action="process.php" method="post" name='login'>
            Cadastro de times
            <br>
            <label>Nome: </label>
            <input type="text" name="nome" id="nome" size='25'> <br>
            <label>Nome do Técnico: </label>
            <input type="text" name="coach" id="coach" size='25'> <br>
            <label>País </label>
            <input type="text" name="country" id="country" size='35'> <br>
            <br>

            <input type="submit" value="Login" class="botao">
            
            
        </form>
        
        Procurar um time
        <br>
        <form action="search.php" method="post">
        <Label>Nome: </Label>
        <input type="text" name="nome" id="nome">
        <input type="submit" class="botao">

        </form>
</div>
<br>
        <div class="login">
                <form method="post" action="signup_proc.php" id="formlogin" name="formlogin" >
            <label>>E-Mail: </label>
            <input type="text" name="email" id="email" size="20">
            <br>
            <label>>Senha: </label>
            <input type="password" name="senha" id="senha" size="20">
            <br>
     
        
            <input type="submit" value="gravar" class='botao' />
        
                </form>
        </div>
    </center>
</body>
</html>