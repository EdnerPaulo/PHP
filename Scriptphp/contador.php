<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem Vindo ao Contador </title>
    </head>
    <body>
        <div style="text-align: center;margin-top:100px;">
            
        <form action="" method="post">
            <label for="escolha">Escolha o número de sua opção</label>
            <input type="number" id="escolha" name="escolha" min="1" max="4" required>
            <button type="submit">Escolher</button>
        </form><br/><br/>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $escolha = (int) $_POST['escolha'];
    processarEscolha($escolha);
}else{
    mostrarMenu();
}

$menu =[
    "1. Exibir mensagem de Boas Vindas",
    "2. Exibir números pares de 1 a 100",
    "3. Exibir números impares de 1 a 100",
    "4. Sair"
];

function mostrarMenu(){
    global $menu;
    echo"Escolha uma opção:<br/>";
    foreach($menu as $opcao) {
        echo $opcao."<br/>";
    }
}

function processarEscolha($escolha){
    switch($escolha){
        case 1:
            echo"Bem vindo ao seu <strong>Sistema</strong> contador automatico de números pares e impares.<br/>";
            break;
        case 2:
            for($i = 1;$i <= 100; $i++){
                if($i % 2 === 0){
                    echo $i."-";
                }
            } 
            break;
        case 3:
            for($i = 1;$i <= 100; $i++){
                if($i % 2 === 1){
                    echo $i."-";
                }
            } 
            break;
        case 4:
            echo"Saindo...<br/>";
            break;
        default:
            echo "Opção inválida! Tente novamente.<br/>";
    }     
}
?>    
</div>
</body>
</html>