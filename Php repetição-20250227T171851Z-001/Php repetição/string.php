<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes com String</title>
</head>
<body>
    <?php
    $prod = "leite";
    $preco = 4.5;
    printf("o %s esta custando R$ %.2f",$prod,$preco);
    echo"<br/>";
    ?>
    <?php
    $x[0] = 4;
    $x[1] = 3;
    $x[2] = 8;
    var_dump($x);
    echo"<br/>";
    $v2 =array(3,7,6,2,1,9);
    var_export($v2);
    ?>
    <?php
    echo"<br/>";
    $t= "Aqui temos um texto gigante criado pelo php e vai mostrar  o funcionamento da funçao wordwarp";
    $res= wordwrap($t, 35,"<br/>\n", true);
    echo $res;
    echo"<br/>";
    ?>
        <?php
        $frase ="Eu vou estudar PHP agora";
        $cont = str_word_count($frase,2);
        print_r($cont);
        
        echo"<br/>";
        $site = "Curso em Video";
        $vetor = explode(" ",$site);
        print_r($vetor);
        
        echo "<br/>";
        $site = "Curso em Video";
        $vetor = str_split($site); // Divide a string em caracteres individuais
        print_r($vetor);
        ?>
        
        <?php
        echo"<br/>";
        $vetor[0] ="Curso";
        $vetor[1] ="em";
        $vetor[2] ="Video";
        $texto = implode("#",$vetor);
        echo($texto);
        
        echo"<br/>";
        $letra = chr(99);
        echo"A letra de codigo 67 é $letra";
        
        echo"<br/>";
        $letra1 = "1";
        $cod = ord($letra1);
        echo("A letra é $letra1 tem o codigo $cod ");


        
    ?>
</body>
</html>