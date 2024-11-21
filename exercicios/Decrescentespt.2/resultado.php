<!DOCTYPE html>
<head>
    <title>Resultado</title>
</head>
<body>
    <center>
        <br>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    if ($num2 > $num1){
        for ($i = $num2; $i >= $num1; $i--){
            echo 'Número '.$i;
            echo '<br>';
        }
    }else{
        for ($i = $num1; $i >= $num2; $i--){
        echo 'Número '.$i;
        echo '<br>';
        }
    }
    ?>
    </center>
</body>
</html>