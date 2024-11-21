<!DOCTYPE html>
<head>
    <title>Resultado</title>
</head>
<body>
    <?php
    $primeiro= $_POST['primeiro'];
    $segundo= $_POST['segundo'];
    $total = $primeiro/ $segundo;
    echo $total;
    ?>
</body>
</html>