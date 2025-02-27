<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body><div style="text-align:center; ">
    <?php

echo"<br/>";
$nome = "Edner Paulo";
$nome1 = "edner paulo";
$nome2 = strtolower($nome);//deixa tudo em minuscula
$nome3 = strtoupper($nome);//deixa tudo em maiuscula
$nome4 = ucfirst($nome1);// deixa a primeira letra maiuscula
$nome5 = ucwords($nome1);// deixa as primeiras letras maiusculas

$frase = "Estou Aprendendo PHP";
$pos= strpos($frase, "PHP");// mostra a possição onde a palavra esta 
echo"$frase <br/> A string foi encontrada na posição  $pos";
echo"<br/>";
$frase1 = "Estou Aprendendo PHP";
$pos1= stripos($frase1, "PHP");// mostra a possição onde a palavra esta 
echo"$frase1 <br/> A string foi encontrada na posição  $pos1";
echo"<br/>";
$frase2 = "Estou Aprendendo PHP no Curso em Video de PHP";
$cont= substr_count($frase2, "PHP");// mostra quantas palavra estasão iguais 
echo"<br/> $frase2";
echo"<br/> PHP foi encontrado $cont vezes";

print("<h2>Seu nome é $nome </h2>");
echo"<br/>";
print("<h2>Seu nome é $nome2 </h2>");
echo"<br/>";
print("<h2>Seu nome é $nome3 </h2>");
echo"<br/>";
print("<h2>eu nome é $nome4 </h2>");
echo"<br/>";
print("<h2>eu nome é $nome5 </h2>");
echo"<br/>";
print("<h2>Seu nome é ".strrev($nome3). "</h2>");
echo"<br/>";

$site ="Curso em Video";
$sub= substr($site,-5,2);// mostra o exato local que vc deseiguina
echo "$sub ";
echo"<br/>";

$nome6= "Paulo";
$novo = str_pad($nome6,30,".", STR_PAD_RIGHT); 
echo "$novo você é uma pessoa maravilhosa.";
echo"<br/>";
$novo1 = str_pad($nome6,30,".", STR_PAD_BOTH); 
echo " você $novo1 é uma pessoa maravilhosa.";
echo"<br/>";
$novo2 = str_pad($nome6,30,".", STR_PAD_LEFT); 
echo " você é uma pessoa maravilhosa. $novo2";
echo"<br/>";

$txt = str_repeat("PHP",5);
print("O texto gerado foi $txt");
echo"<br/>";
print (str_repeat("-",100));
echo"<br/>";

$frases = "Gosto de estudar Matematica!!! ";
$novafrase = str_replace("Matematica", "PHP",$frases);
print($frases);
echo"<br/>";
print($novafrase);
?>


</div>
</body>
</html>