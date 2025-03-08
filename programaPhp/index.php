<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testes</title>
</head>
<body>
<?php
$nome ="Edner Paulo  ";
$sobreNome =" Severo Dias";
const PAIS = "Brasil";
$idade =43;
$peso=78.5;
$casado= true;
const CURSO = "ADs";
//
//
echo "Muito prazer , $nome $sobreNome e vc mora no ".PAIS."</br>";
echo "EU tenho $idade anos, peso: $peso e sou casado  se sim digite 1 se não digite 2 , $casado e faço o curso de ".CURSO. "</br>";
//
//
$nome = "Paulinho";
$sobrenome =" Black Power";
//
//
echo "Muito prazer , $nome $sobreNome  e mora no ".PAIS;
?>
<?php 
$num =300;
// 0x hexadecimal, 0b binario, 0 octaldecimal
$num0 =010;
echo" </br>O valor da variavel e $num";
echo" </br>O valor da variavel e $num0";

$v = "verdade";
echo" </br>";
var_dump($v);
// var_dump me da o tipo  que a variavel é

$num1 =5e3;
echo" </br>O valor da variavel e $num1";
echo" </br>";
var_dump($num1);

$vet =  [6,2,9,"Maria",3,5,true];
echo" </br>";
var_dump($vet);

class Pessoa{
    private string $nome1;
}
$p = new Pessoa;
echo" </br>";
var_dump($p);






?>
    
</body>
</html>