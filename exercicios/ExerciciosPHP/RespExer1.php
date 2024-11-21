<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="Index.php">Voltar</a>
<br>
<?php
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $result1 = $num1 + $num2;
    

    if($result1 > 20){
        echo ($result1 + 8);
    }else{
        echo ($result1 - 5);
    }

?>    
</body>
