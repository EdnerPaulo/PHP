<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post">
            Valor = <input type="nunber" value="0" min="0" max="20" name="val"/>
            <input type="submit" value="Fatoreal"/>

        </form>
        <form action="" method="post">
            Tabuada = 
            <select name="num">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            <input type="submit" value="Gerar Tabuada"/>

        </form>
    </div>
<?php

$c=1;
do{
    echo"$c ";
    $c++;
}while($c<=10);

echo"<br/>";

$c=1;
do{
    echo"$c ";
    $c+=2;
}while($c<=20);

echo"<br/>";

$c=20;
do{
    echo"$c ";
    $c-=2;
}while($c>=0);

$v =isset ($_POST["val"]) ? $_POST["val"]:1;

echo"<h1> Calculando o fatoreal de $v</h1>";

$c =$v;
    $fat=1;
    do{
        $fat= $fat*$c;
        $c--;
    }while($c >=1);
    echo"<h2> $v! = $fat";

if(isset($_POST["num"])){
    $numero =$_POST["num"];
    echo"<h2> Tabuada de $numero</h2>";
    echo"<ul>";
    for($i =1; $i <=10; $i++){
        $resultado = $numero * $i;
        echo"<li> $numero x $i =$resultado</li>";
    }
    echo"</ul>";
}

?>
    
</body>
</html>