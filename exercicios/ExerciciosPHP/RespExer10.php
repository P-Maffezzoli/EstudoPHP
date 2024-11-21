<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="Index.php">Voltar</a>
<br>
<?php
    $palavra = $_POST['palavra'];
    $result = "";
    for($i = 5; $i >1 ;i--){
        $result .= $palavra;
        echo $result."<br>";
        }
?>    
</body>

