<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="Index.php">Voltar</a>
<br>
<?php
    $num1 = $_POST['num1'];

    switch($num1){
        case 1:
            echo $num1." é o mês de Janeiro";
            break;
        case 2:
            echo $num1." é o mês de Fevereiro";
            break;
        case 3:
            echo $num1." é o mês de Março";
            break;
        case 4:
            echo $num1." é o mês de Abrio";
            break;
        case 5:
            echo $num1." é o mês de Maio";
            break;
        case 6:
            echo $num1." é o mês de Junho";
            break;
        case 7:
            echo $num1." é o mês de Julho";
            break;
        case 8:
            echo $num1." é o mês de Agosto";
            break;
        case 9:
            echo $num1." é o mês de Setembro";
            break;
        case 10:
            echo $num1." é o mês de Outubro";
            break;
        case 11:
            echo $num1."; é o mês de Novembro";
            break;
        case 12:
            echo $num1." é o mês de Dezembro";
            break;
        default:
            echo $num1." não é nenhum mês";    
    }
?>    
</body>
