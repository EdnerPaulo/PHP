<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video</title>
    <style>
        /* Reset de margem e padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        h1, h2 {
            color:rgb(123, 25, 0);
            margin-bottom: 20px;
        }

        main {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1.1rem;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="number"] {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        
        input[type="submit"] {
            background-color:rgb(48, 13, 1);
            color: white;
            padding: 12px;
            font-size: 1.1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        input[type="submit"]:hover {
            background-color:rgb(234, 45, 28);
        }
        
        section#resultado {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            max-width: 600px;
            margin: 20px auto;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #555;
        }
        
        strong {
            color: #e74c3c;
        }
        

    </style>
</head>
<body>
<?php
    $valor1 = $_GET['v1'] ??0;
    $valor2 = $_GET['v2'] ??0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor1:</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor2:</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da conta</h2>
        <?php
    $soma = $valor1+$valor2;
    print"<p> A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma</strong></p>"
    ?>
    </section>
</body>
</html>