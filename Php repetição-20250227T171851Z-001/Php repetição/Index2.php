<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <div>
        <form action=""method="POST">
            <select name="num">
                <?php
                    for ($i=1; $i <= 10; $i++){
                        echo"<option>$i<?option>";
                    }
                    ?>
            </select>
            <input type="submit" value="Tabuada"/>
        </form>
    </div>
    <?php
    for($c=1; $c <= 10; $c++){
        echo"$c ";
    }
    echo"<br/>";
    for($c=10; $c >= 1; $c--){
        echo"$c ";
    }
    echo"<br/>";
    for($c=0; $c <= 10; $c+=2){
        echo"$c ";
    }
    echo"<br/>";
    for($c=0; $c <= 100; $c+=10){
        echo"$c ";
    }
    echo"<br/>";
    for($c=100; $c >= 0; $c-=5){
        echo"$c ";
    }
    
    echo"<br/>";
    $n = isset($_POST["num"])? $_POST["num"]:1;
    for($c=1; $c <=10;$c++){
        $r =  $n *$c;
        echo"$n X $c = $r";
        echo"<br/>";
        }
    ?>    

<div>
        <!-- Formulário para o usuário inserir o número -->
        <form action="" method="post">
            Número: <input type="number" name="numero" required/>
            <input type="submit" value="Verificar se é Primo"/>
        </form>
    </div>

    <?php
    // Verifica se o formulário foi enviado
    if (isset($_POST["numero"])) {
        $numero = $_POST["numero"];
        
        // Função para verificar se o número é primo
        function verificarPrimo($num) {
            if ($num <= 1) {
                return false; // Números menores ou iguais a 1 não são primos
            }

            // Verifica divisibilidade de 2 até a raiz quadrada do número
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false; // Se o número for divisível por i, não é primo
                }
            }

            return true; // Se não foi divisível por nenhum número, é primo
        }

        // Chama a função e exibe o resultado
        if (verificarPrimo($numero)) {
            echo "<h2>$numero é um número primo!</h2>";
        } else {
            echo "<h2>$numero não é um número primo.</h2>";
        }
    }
    ?>

</body>
</html>