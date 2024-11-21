<!DOCTYPE html>
<head>
    <title>Resultado</title>
</head>
<body>
    <center>
        <br>
    <?php
    $num = $_POST['num'];
    for ($i = $num;$i >=0; $i--){
        echo 'Número '.$i;
        echo '<br>';
    }
    ?>
    </center>
</body>
</html>