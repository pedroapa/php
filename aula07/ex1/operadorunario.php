<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operador Unário</title>
</head>
<body>
    <div>
        <?php
            $val1 = 10;
            $val2 = 25;
            $resposta = $_GET["r"];
            echo "<h1>ex01
            Permitir que o usuário escolha entre somar ou multiplicar dois números</h1>";
            echo "<br> Você tem duas variaveis, A = $val1 e B = $val2";
            echo "<br>Digite 1 caso queira somar os dois números ou digite 2 se preferir multiplicar: ";
        
            $resultado = ($resposta == 1 )? $val1 + $val2 : $val1 * $val2;
            echo "<br>O resultado da operação foi: $resultado ";
        ?>
    </div>
    
</body>
</html>