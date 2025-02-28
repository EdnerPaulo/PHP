<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="text-align:center;">
    <h1>Vamos calcular sua Media</h1>
    <form action="media.php" method="POST">
        <label for="media">Digite suas notas:</label><br/><br/>
        Nota 1
        <input type="number" name="nota1"min="0" max="10">
        <br/><br/>
        Nota 2
        <input type="number" name="nota2"min="0" max="10">
        <br/><br/>
        Nota 3
        <input type="number" name="nota3"min="0" max="10">
        <br/><br/>
        <input type="submit" value="Calcular">
    </form>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['nota1'],$_POST['nota2'],$_POST['nota3'])&& !empty($_POST['nota1'])&& !empty($_POST['nota2'])&& !empty($_POST['nota3'])){
    $nota1 = (float)$_POST['nota1'];
    $nota2 = (float)$_POST['nota2'];
    $nota3 = (float)$_POST['nota3'];
    $media = ($nota1 + $nota2 + $nota3)/3;

    echo"<h2> A media das suas notas é: ".number_format($media,2)."</h2>";
    } else {
    echo"<p style='color:red;'> Por favor , preencha todas as notas corretamente.</p>";
    }
}
?>
</div>
</body>
</html>