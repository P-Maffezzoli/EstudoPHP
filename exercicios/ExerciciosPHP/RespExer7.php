<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="Index.php">Voltar</a>
<br>
<?php
$nomeLivro = $_POST['nomeLivro'];
$verify = $_POST['verify'];

if ($verify == 1){
    echo "Nome:".$nomeLivro."<br>";
    echo "Tempo de devolução: 10 dias";
}else{
    echo "Nome:".$nomeLivro."<br>";
    echo "Tempo de devolução: 3 dias";
    
}
?>    
</body>

