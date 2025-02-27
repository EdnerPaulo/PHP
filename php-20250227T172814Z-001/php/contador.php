<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Personalizado</title>
</head>
<body>

    <h1>Contador Personalizado</h1>

    <!-- Formulário onde o usuário insere os valores -->
    <form method="POST">
        <label for="inicio">Início:</label>
        <input type="number" name="inicio" required><br><br>

        <label for="fim">Fim:</label>
        <input type="number" name="fim" required><br><br>

        <label for="incremento">Escolha o incremento (1 a 5):</label>
        <select name="incremento" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br><br>

        <input type="submit" value="Contar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Coletando os valores do formulário
        $inicio = $_POST['inicio'];
        $fim = $_POST['fim'];
        $incremento = $_POST['incremento'];

        // Determinando se a contagem será crescente ou decrescente
        $valoresContados = [];
        if ($inicio < $fim) {
            // Contagem crescente
            $i = $inicio;
            while ($i <= $fim) {
                $valoresContados[] = $i;
                $i += $incremento;
            }
            echo "<h2>Contagem Crescente:</h2>";
        } else {
            // Contagem decrescente
            $i = $inicio;
            while ($i >= $fim) {
                $valoresContados[] = $i;
                $i -= $incremento;
            }
            echo "<h2>Contagem Decrescente:</h2>";
        }

        // Exibindo os valores contados na tela
        echo "<p><strong>Valores Contados: </strong>" . implode(" ", $valoresContados) . "</p>";
    }
    ?>


</body>
</html>
