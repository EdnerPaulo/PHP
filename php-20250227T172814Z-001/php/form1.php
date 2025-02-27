<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET['v1']) && isset($_GET['v2']) && isset($_GET['v3']) && isset($_GET['v4']) && isset($_GET['v5'])) {
    $v1 = $_GET['v1'];
    $v2 = $_GET['v2'];
    $v3 = $_GET['v3'];
    $v4 = $_GET['v4'];
    $v5 = $_GET['v5'];

    echo "Você digitou os seguintes números:<br/>";
    echo "Valor 1: $v1<br/>";
    echo "Valor 2: $v2<br/>";
    echo "Valor 3: $v3<br/>";
    echo "Valor 4: $v4<br/>";
    echo "Valor 5: $v5<br/>";

        // Soma dos números
    $soma = (int)$v1 + (int)$v2 + (int)$v3 + (int)$v4 + (int)$v5;
    echo "<strong>Soma dos números:</strong> <strong>$soma</strong><br/>";
    
} else {
    echo "Preencha todos os campos!";
}
?>
<a href="form.php"><button>Voltar</button></a>
</body>
</html>