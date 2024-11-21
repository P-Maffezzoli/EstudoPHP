<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="Index.php">Voltar</a>
<br>
<?php
    $numList = $_POST['numList'];

    $list = explode(", ", $numList);
    $positives = array();
    $negatives = array();

    foreach($list as $num){
        if($num > 0)
        array_push($positives, $num);
    }else{
        array_push($negatives, $num);
    }
    echo "Soma dos números positivos: " . "<br>" . array_sum ($positives) . "<br>";
    echo "Lista dos números negativos:" . "<br>" . implode (", " , $negatives) . "<br>"; 

?>    
</body>

