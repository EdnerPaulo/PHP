<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form action="form1.php" method="get">
        <?php
           $n = 1;
           while ($n <=5) {
            echo "Valor $n: <input type= 'number'  name='v$n' max='100' min='0' value='0'/><br/>";
            $n++;
            }
            ?>
            <input type="submit" value="Enviar" >
    </form>
</div>
</body>
</html>