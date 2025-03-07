<?php

$vetor = array(1,2,3,4,5,6,7,8,9);
foreach($vetor as $v){
print" O valor atual do vetor é $v.</br> ";
}
$a = array("um"=> 1, "dois"=> 2, "tres"=>3,);
foreach ($a as $chave => $valor){
    print("\$a[$chave] => $valor.</br>");
}
?>
<?php
 
$k =0;
while($k < 9){
    if($vetor[$k] == "sair")
    {break;}
    echo $vetor[$k]."</br>";
    $k++;
}
?>
<?php
$k= 0;
$i = 0;
while($k < 10){
    $i++;
    $k++;
    while($i < 20){
        if($i==10){
            echo $i;
            echo"\n Encerrando o primeiro while...</br>";
            break;
            //echo "Essa linha não vai ser impressa";
        }
        elseif($i==15){
            echo $k;
            echo "\n encerrando os dois whiles...";
        }
        $i++;
    }
}
?>
<?php
echo"</br>";
$vetor1= array(1,3,5,8,11,12,15,20);
for($i=0; $i<sizeof($vetor1);$i++){
    if($vetor1[$i]%2!=0)//impar
    {continue;}
    $num_par= $vetor1[$i];
    echo"O numero $num_par é par</br>";
}
?>