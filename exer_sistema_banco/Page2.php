<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: index.php');
}
include_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Banco Legal: Gerenciamentos</title>
</head>

<body>


    <div class="container">
        <div class="row mt-4 d-flex justify-content-between aling-items-center">
            <h1>Olá <?php echo $_SESSION['nome'] ?> </h1>
            <a href="sair.php">SAIR</a>
        </div>
        <br>
        <br>
        <div class="options">
            <button type="button" data-bs-toggle="modal" data-bs-target="#cadClientModal"
                class="btn btn-outline-success">Adicionar Cliente</button>

            <!-- Modal -->
            <div class="modal fade" id="cadClientModal" tabindex="-1" aria-labelledby="cadClientModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="cadClientModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" id="cadClienteForm">
                                <div class="mb-3">
                                    <label for="nome_cliente" class="col-form-label">Nome:</label>
                                    <input type="text" class="form-control" id="nome_cliente" name="nome_cliente"
                                        placeholder="Nome completo do Cliente" required value="Jonas">

                                    <label for="cpf_cliente" class="col-form-label">CPF:</label>
                                    <input type="text" class="form-control" id="cpf_cliente" name="cpf_cliente"
                                        placeholder="CPF do Cliente" maxlength="14"
                                        pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                                        title="Digite o CPF no formato ***.***.***-**" required value="123.123.123-12">

                                    <label for="telefone" class="col-form-label">Telefone:</label>
                                    <input type="text" class="form-control" id="telefone" name="telefone"
                                        placeholder="Telefone do Cliente" maxlength="12" required value="47 983739836">

                                    <label for="endereco" class="col-form-label">Endereço:</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco"
                                        placeholder="Endereço do Cliente" required value="Rua Madeira">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" class="btn btn-outline-primary" value="Cadastrar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim Modal -->

        </div>
        <br>
        <!--lista de Clientes-->
        <div class="row col-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Cliente</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "list.php";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="custom.js"></script>
</body>

</html>