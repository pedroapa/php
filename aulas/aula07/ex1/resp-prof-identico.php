<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>operador de identico</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = "3";
            $r = ($a == $b)? "SIM": "NÃO";
            echo "<br>As variaveis a = 3 e b = '3' são iguais? $r"; //da SIM no console
            echo "<br>Agora vamos utilizar o operador de identico e fazer a mesma pergunta";
            $r = ($a === $b)? "SIM": "NÃO";
            echo "<br>As variaveis  a = 3 e b = '3' são iguais? $r";
        ?>
    </div>
    
</body>
</html>