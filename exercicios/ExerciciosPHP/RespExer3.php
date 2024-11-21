<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="Index.php">Voltar</a>
<br>
<?php
$name = $_POST['name'];
$sex = $_POST['sex'];
$idade = $_POST['idade'];   

if ($sex != "F" || $idade >25){
    echo "$name: Não aceita";
}else{
    echo "$name : Aceita";
}

?>    
</body>