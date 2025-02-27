<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas PHP</title>
</head>
<body>
    <form action=""method="POST">
        Digite um valor <input type="number" name="num"require/>
        <br/>
        Digite outro valor <input type="number" name="num2"require/>
        <input type="submit" Value="somar numeros"/>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $num = intval($_POST['num']);
            $num2 = intval($_POST['num2']);
            $somatoria =$num +$num2;
            echo"A soma dos numeros " .$num." e " .$num2. " é igual a: ".$somatoria;
        }else {
            echo "Por favor, insira valores numéricos válidos.";
        }

        ?>
    <?php

        function soma($a,$b){
            $s =$a+$b;
            echo"<p>A soma vale $s</p>";
        }
        soma(3,4);
        soma(8,4);
        soma(6,4);
        $x =21;
        $y =16;
        soma($x,$y);
        ?>
        <?php
        
        function somar($c,$d){
            return $c+$d;
        }

            $res =somar(9,4);
            echo "Resultado da soma: " . $res;
        ?>
        <?php
        echo"<br/>";
            function somas(){
                $p = func_get_args();
                $tot= func_num_args();
                $s =0;
                for ($i =0; $i <$tot; $i++){
                    $s+= $p[$i];
                }
                return $s;

            }



        $resul=somas(3,4,8,10,2); 
        echo"A somas dos valores é $resul";
        ?>
</body>
</html>