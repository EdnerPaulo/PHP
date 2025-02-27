<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Valor : <input type="number" name="val" min="0" max="20" value="1"/>
        <input type="submit" value="Fatoreal"/>
    </form>

    <?php
    // Exibindo números de 20 a 1 (diminuindo de 2 em 2)
    $c = 20;
    do {
        echo $c . " ";
        $c -= 2;
    } while ($c >= 1);

    echo "<br/>";

    // Exibindo números de 0 a 10 (aumentando de 2 em 2)
    $c = 0;
    do {
        echo $c . " ";
        $c += 2;
    } while ($c <= 10);
    
    echo "<br/>";

    // Exibindo novamente números de 0 a 10 (aumentando de 2 em 2)
    $c = 0;
    do {
        echo $c . " ";
        $c += 2;
    } while ($c <= 10);

    echo "<br/>";

    // Função para calcular o fatorial
    function fatorar($n) {
        $fatorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }

    // Capturando o valor do formulário e validando o valor
    $_v = isset($_POST['val']) ? $_POST['val'] : 1;  // Corrigido para $_POST['val']

    // Calculando o fatorial
    $fatorial = fatorar($_v);

    // Exibindo o valor escolhido e o fatorial
    echo "<p><strong>Valor escolhido: </strong>" . $_v . "</p>";
    echo "<p><strong>Fatorial: </strong>" . $fatorial . "</p>";
    ?>

    <!-- Formulário para escolher a tabuada -->
    <form method="post">
        <label for="tabuada">Escolha a tabuada (1 a 10):</label>
        <select name="tabuada" id="tabuada">
            <?php
            // Gerar opções de 1 a 10
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <input type="submit" value="Ver Tabuada">
    </form>

    <?php
    // Exibindo a tabuada escolhida
    if (isset($_POST['tabuada'])) {
        $tabuada = $_POST['tabuada'];
        
        echo "<h3>Tabuada do $tabuada:</h3>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<li>$tabuada x $i = $resultado</li>";
        }
        echo "</ul>";
    }
    ?>

</body>
</html>
