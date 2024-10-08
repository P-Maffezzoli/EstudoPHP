<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            padding: 1px;
            margin: 1px;
            text-align: center;
            font-size: 2em;
            font-family: monospace;
            background-color: beige;
        }
    </style>
</head>

<body>
    <form action="cadastro.php" method="POST">
        <label for="nome">Digite seu nome: </label><br>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="idade">Digite sua idade: </label><br>
        <input type="text" name="idade" id="idade">
        <br>
        <input type="submit" value="Cadastrar">
    </form>


</body>

</html>