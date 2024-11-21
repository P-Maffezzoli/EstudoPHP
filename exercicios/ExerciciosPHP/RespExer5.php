<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="Index.php">Voltar</a>
<br>
<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    if ($num1 == $num2 && $num1 == $num3 && $num2 == $num3){
        echo "O triângulo é equilátero.";
    }elseif ($num1 != $num2 && $num1 != $num3 && $num2 != $num3){
        echo "O triângulo é escaleno.";
    }elseif ($num1 == $num2 && $num1 != $num3 && $num2 != $num3){
        echo "O triângulo é isósceles.";
    }elseif ($num1 != $num2 && $num1 ==  $num3 && $num2 != $num3){
        echo "O triângulo é isósceles.";
    }
?>   
</body>