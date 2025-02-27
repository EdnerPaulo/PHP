 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body><div style="text-align:center">
    <?php
    
        $n = array(3,5,8,2);
        $n[]= 7;
        echo "<pre>";
        print_r($n) ;
        echo"</pre>";

        $c = range(5,20,5);
        echo "<pre>";
        print_r($c) ;
        echo"</pre>";
        
        
        $c1 = range(5,20,2);
        foreach ($c1 as $valor) {
            echo "$valor ";
        }
        
        $v = array(1=>"A",3=>"B",6=>"C",8=>"D",9=>"E");
        echo "<p>";
        print_r($v) ;
        echo"</p>";
        
        $z = array(5=>9,3=>1,1=>8,4=>7,2=>6);
        $z[] =0;
        unset($z[5]);
        echo "<p>";
        print_r($z) ;
        echo"</p>";
        
        $cad= array("nome"=>"Ana",
                    "idade"=>23,
                    "peso"=>78.5);
        $cad["fuma"]=true;
        echo "<p>";
        foreach ($cad as $cam =>$val) {
            echo "O campo $cam possui o conteudo $val <br/>";
        }
        echo"</p>";

        $m=
        array(array(2,3),
              array(3,4),
              array(9,5));
        $m[2][0] = $m[1][1];
        echo "<pre>";
        print_r($m) ;
        echo"</pre>";
        
        


    ?>
    </div>
 </body>
 </html>