<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mais Rotinas</title>
</head>
<body>
    <?php
    function teste($x){
        $x += 2;
        echo $x;
    }
    $a =3;
    teste($a);
    echo "<br/>";
    echo $a;

    echo "<br/>";

    function teste2(&$y){
        $y += 2;
        echo "o valor de Y é $y";
    }
    $b =5;
    teste2($b);
    echo "<br/>";
    echo "O valor de b é $b";
    
    ?>
</body>
</html>