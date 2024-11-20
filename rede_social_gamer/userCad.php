<?php
include_once("connect.php");
?>
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

    <title>Cadastro de Usuário</title>
</head>

<body class="container-fluid" style="background-color:#6997c9;">

    <div class="userCadBox position-absolute top-50 start-50 translate-middle">
        <form action="userCad.php" name="cadForm" method="post">
            <h1>Login de Usuário</h1>
            <br>
            <label for="email">Digite seu Email:</label><br>
            <input type="text" name="email" placeholder="Email:" required>
            <br>
            <label for="password">Digite sua Senha:</label><br>
            <input type="password" name="password1" placeholder="Senha:" required>
            <br>
            <label for="password2">Confirme sua Senha:</label><br>
            <input type="password" name="password2" placeholder="Confirme sua senha:" required><br>
            <br>
            <input type="submit" value="Login">
        </form>

        <?php
        if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) {
            $emailUser = $conn->real_escape_string($_POST['email']);
            $password1 = $conn->real_escape_string($_POST['password1']);
            $password2 = $conn->real_escape_string($_POST['password2']);

            if ($password1 != $password2) {
                echo "<h3>As senhas não são as mesmas.</h3>";
            } else {
                $sql = "INSERT INTO `usuarios`
            (`email`,`password`) VALUES ?,?;";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('ss', $emailUser, $password1);
                $stmt->execute();

                echo "<h3>Cadastro realizado! Para realizar o login <a href='userLogin.php'>Clique aqui</a></h3> ";

            }
        }
        ?>
    </div>



</body>

</html>