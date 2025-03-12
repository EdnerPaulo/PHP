<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritimetica</title>
</head>
<body style="text-align: center;">
    <h1>Aritimetica</h1>
    
    <?php

$n = abs(500);
echo " A resposta é $n";
echo " </br>";

$r = base_convert(10, 10, 2);
echo " A resposta é $r";
echo " </br>";

$d = intdiv(5, 2);
echo " A resposta é $d";
echo " </br>";

$p = M_PI;
echo " A resposta é $p";
echo " </br>";

$po = pow(5,2);
echo " A resposta é $po";
echo " </br>";

$raiz= sqrt(81);
$raizcubo= 27**(1/3);
echo " A resposta é $raiz";
echo " </br>";
echo " A resposta é $raizcubo";
echo " </br>";

$r1 = "2"+"2";
echo " A resposta é $r1";
var_dump($r1);

?>


</body>
</html>