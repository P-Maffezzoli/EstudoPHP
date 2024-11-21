<head> <link rel="stylesheet" href="style.css"></head>
<body>
<a href="Index.php">Voltar</a>
<br>
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];

if($num1 > $num2 && $num1 >$num3 && $num2 > $num3){
    echo $num1."<br>";
    echo $num2."<br>";
    echo $num3;
}elseif($num2 >$num1 && $num2 > $num3 && $num1 > $num3){
    echo $num2."<br>";
    echo $num1."<br>";
    echo $num3;
}elseif($num3 >$num1 && $num3 > $num2 && $num2 > $num1){
    echo $num3."<br>";
    echo $num2."<br>";
    echo $num1;
}elseif($num2 >$num1 && $num2 > $num3 && $num3 > $num1){
    echo $num2."<br>";
    echo $num3."<br>";
    echo $num1;
}elseif($num3 >$num1 && $num3 > $num2 && $num2 > $num1){
    echo $num2."<br>";
    echo $num1."<br>";
    echo $num3;
}else{
    echo $num3."<br>";
    echo $num1."<br>";
    echo $num2;
}





?>    
</body>