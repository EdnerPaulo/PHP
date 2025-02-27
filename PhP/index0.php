<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><div style="text-align:center;">
<pre>
<?php
    $v= array("A","J",8,"X",10E4);
    print_r($v). "&nbsp;&nbsp;&nbsp;";
    var_dump($v);
    $tot = count($v);
    echo "O vetor tem ".count($v)." elementos". "&nbsp;&nbsp;&nbsp;";
    echo "O vetor tem $tot elementos". "&nbsp;&nbsp;&nbsp;";
    
    $v1= array("A","J","M","X","K");
    print_r($v1);
    $v1[]="O";    
    print_r($v1);
    sort($v1);//ordem crescente
    print_r($v1);
    rsort($v1);//ordem decresente
    print_r($v1);
    asort($v1);//ordem associativa
    print_r($v1);
    arsort($v1);//ordem associativa decresente
    print_r($v1);
    

    $n = array(3,5,8,2,7);// estes comandos sao pra pilha
    print_r($n);
    array_push($n,9);// colocar um elemento no final
    print_r($n);
    array_pop($n);// retira o ultimo elemento
    print_r($n);
    array_unshift($n,9);// coloca um elemento na primeira possisão da pilha
    print_r($n);
    array_shift($n);// vai retirar o primeiro elemento da pilha
    print_r($n);
    sort($n);//ordem crescente
    print_r($n);
    rsort($n);//ordem decresente
    print_r($n);
    asort($n);//ordem numerica
    print_r($n);
    arsort($n);//ordem  numerica decresente
    print_r($n);
    ksort($n);//ordem descresente independete do vertor
    print_r($n);


    $a= 1;
    $b= 3;
    $c= 5;
    $res1 = ++$b -$a;
    $res2 = $c-- +$a;
    $res3 = --$a + $c++ ;
    echo "a = $a <br/> b = $b <br/>c = $c<br/>";
    echo "res1 = $res1 <br/> res2 = $res2 <br/>res3 = $res3<br/> ";


?>
<?php 
   function soma($b=5, $c=4){ 
	   return $b+$c; 
   } 
   echo soma(); 
   echo "<br/>";
   ?>
<?php
for($i=0; $i<=10; $i++){
    if($i % 3 == 0)
    continue;
echo $i."-";
}
echo "Fim";
echo "<br/>";
?>
<?php 
  $a = 5;
  $b = 3;
  $c = ($a>$b)?true:false;
  print $c;
?>

</pre>
</div>

</body>
</html>