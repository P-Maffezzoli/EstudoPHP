<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <title>Login de Usuário</title>
</head>

<body class="container-fluid" style="background-color:#6997c9;">

    <div class="loginBox position-absolute top-50 start-50 translate-middle">
        <form action="userLoginProcess.php" method="post">
            <h1>Login de Usuário</h1>
            <input type="text" name="email" placeholder="Email:" required>
            <br>
            <input type="password" name="password" placeholder="Senha:" required>
            <br>
            <br>
            <input type="submit" value="Login">
        </form>
        <a href="userCad.php">Não possuo cadastrado ainda.</a>
    </div>


</body>

</html>