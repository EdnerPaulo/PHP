<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana","SEGUNDA",time() + 3600);
                //  este configura os $_COOKIE  
                
                session_start();
                $_SESSION["teste"] = "FUNCIONOU";

                echo "<h1> Superglobal Get</h1>";
                var_dump($_GET);
                // pega os parametros pela url
                
                echo "<h1> Superglobal Post</h1>";
                var_dump($_POST);
                // pega os parametros pelo pacotes
                
                
                echo "<h1> Superglobal Request</h1>";
                var_dump($_REQUEST);
                // pega os parametros pela pelos dois
                
                echo "<h1> Superglobal COOKIE </h1>";
                var_dump($_COOKIE);
                // salva pequenas variaveis em seu pc por um tempo
                
                echo "<h1> Superglobal SESSION </h1>";
                var_dump($_SESSION);
                // mostra uma sessao do codigo
                
                echo "<h1> Superglobal ENV </h1>";
                var_dump($_ENV);
                // mostra variaveis de ambiente
                //foreach(getenv() as $c => $v){
                //    echo"<br/>$c -> $v ";
                //}
                
                echo "<h1> Superglobal Server</h1>";
                var_dump($_SERVER);
                // identifica tudo que tem seu servidor 
            
                echo "<h1> Superglobal Global</h1>";
                var_dump($GLOBALS);
                // identifica tudo em todos seus metodos 
             
             ?>
            </pre>
    </main>
</body>
</html>