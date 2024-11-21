<?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "campdb";

    $connect = new mysqli($hostname, $user, $password, $database);


    if($connect -> connect_errno){
        echo"Conexão com Mysql Falhou: ". $connect->connect_error;
        exit();
    }else{
    $nome = $connect -> real_escape_string($_POST['nome']);
    $coach = $connect -> real_escape_string($_POST['coach']);
    $country =$connect -> real_escape_string($_POST['country']);

    $sql="INSERT INTO `times`
        (`nome`, `coach`, `país`)
        VALUES
            ('".$nome."', '".$coach."', '".$country."')";
    
    $result = $connect->query($sql);

    $connect -> close();
    echo "Time cadastrado com sucesso.";
    echo "<a href='index.php'>Voltar</a>";
    exit();

    }

?>

