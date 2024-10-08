<?php
    include_once("connect.php");
    $nome = $connect->real_escape_string($_POST["nome"]);
    $idade = $connect->real_escape_string($_POST["idade"]);

        $sql = "INSERT INTO dados 
                (`nome`, `idade`) 
                VALUES
                ('" . $nome . "', '" . $idade . "')";
        $resultado = $connect->query($sql);
        $connect->close();
        header('location: index.php', true, 301);