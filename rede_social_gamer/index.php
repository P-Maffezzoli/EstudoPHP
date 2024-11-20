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
    <title>HomePage</title>
</head>

<body class="container">
    <div class="d-flex justify-content-between aling-items-center">
        <a href="sair.php">sair</a>
            <a href="userLogin.php" class="btn btn-lg btn-info position-relative top-0 start-0"> Login </a>

            <?php
            include_once("connect.php");
            session_start();
            $idAdmin = $_SESSION['id_admin'];

            if ($idAdmin == 0) {
                echo '<button type="button" class="btn btn-lg btn-info position-absolute top-0 end-0" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        Cadastrar Jogos
    </button>';
            }else {
                
            }

            ?>
            <!--MODAL-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body aling-items-center">
                            <form action="cad.php" method="post">
                                <h2>Bem-Vindo!</h2>
                                <input type="text" name="nome_jogo" placeholder="Nome do Jogo:" required>
                                <br>
                                <label for="desc">Descrição do jogo</label>
                                <br>
                                <textarea name="desc" id="desc" cols="40" rows="6"></textarea>
                                <br>
                                <br>
                                <input type="submit" class="btn btn-warning" value="Cadastrar Jogo">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--MODAL-->
    </div>
</body>

</html>