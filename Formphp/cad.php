<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <header>    <h1>Resultado do cadastro</h1></header>
<main>
    <?php
    $nome = $_GET["nome"]?? "Sem Nome";
    $sobrenome = $_GET["sobrenome"]?? "Desconhecido";
    echo"<p> É um prazer  te conhecer ,<strong> $nome $sobrenome !</strong> Este e meu site.</p>";
    ?>
   <p> <a href="javascript:history.go(-1)">Voltar</a></p>    
</main>
</body>
</html>