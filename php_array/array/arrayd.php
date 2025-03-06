<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
<body>
    <nav class="menu">
<?php
   $menu = array(
       "Home" => "index.php",
       "Sobre" => "sobre.php",
       "Serviços" => "servicos.php",
       "Contato" => "contato.php"
   );

    echo "<ul>"; // Começa uma lista não ordenada (ul)

    foreach ($menu as $nome => $link) {
        echo "<li><a href='$link'>$nome</a></li>";
    }

    echo "</ul>"; // Fecha a lista não ordenada (ul)
?>
    </nav>
</body>
</html>