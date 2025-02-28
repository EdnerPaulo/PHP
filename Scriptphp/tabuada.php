<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
     <div style="text-align:center; margin-top:200px;"> 
        <h1>Vamos fazer a Tabuada.</h1>
        <form action="" method="POST">
            <select name="num" >
                <?php
                        for($i =1; $i <=10; $i++){
                            echo"<option>$i</option>";
                        }
                    ?>
            </select>
            <input type="submit" value="Tabuaba"/>
        </form>
    </div>
    <?php

if(isset($_POST["num"])){
    $numero = $_POST["num"];
    echo"<div style='text-align:center; margin-top:20px;'>";
    
    echo"<h2> Tabuada de $numero</h2>";
    echo"<ul>";
    for($i = 1; $i <=10; $i++){
        $resultado =$numero *$i;
        echo"<li> $numero X $i = $resultado</li>";
    }
    echo "</ul>";
    echo "</div>";
}

?>
</body>
</html>