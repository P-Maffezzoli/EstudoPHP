<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="Index.php">Voltar</a>
<br>
<?php
    
    $num1 = $_POST['num1'];    

    if($num1 % 10 == 0){
        echo "O número $num1 é divisível por 10!";
    }
    elseif($num1 % 5 ==0){
        echo "O número $num1 é divisível por 5!";
    }
    elseif($num1 % 2 ==0){
        echo "O número $num1 é divisível por 2!";
    } else{
        echo "O número $num1 não é divisível por nenhum deles.";
    }


?>    
</body>