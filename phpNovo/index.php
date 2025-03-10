<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body><div style="text-align:center">
    <?php
const CANAL="O melhor curso ";
// constantes sempre tem que ser maiusculo 
$video = "Ads";
echo"Curso  ".$video;
echo '</br>Curso ';
echo "PHP \u{1f418}";
// as aspas duplas interpreta o codigo 
echo "</br>";
echo 'PHP \u{1f418}';
// as aspas simples não interpreta o codigo 
echo "</br>";
echo "PHP \u{1f596}";
echo "</br>";
echo CANAL."PHP \u{1f499}".$video;
$nom ="Rodrigo";
$snom = "Nogueira";
echo "</br>";
echo "$nom \"Minotauro\" $snom";
echo "</br>";
// a barra ao contrario antes das aspas faz com que o codigo interprete a aspa com string normal
// \n nova linha
// \t tabulação horizontal
// \\ barra invertida
// \$ Sinal de cifrão
// \u{} comando codepoint unicode
// string heredoc quebras as linhas em formato texto com interpretação
echo<<< TESTE
Estou estudando $video
No curso de $nom

TESTE;
echo "</br>";
echo<<< 'TESTE'
Estou estudando $video
No curso de $nom

TESTE;
// string nowdoc sem interpretação




    ?>
    </div>
 </body>
 </html>