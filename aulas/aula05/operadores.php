<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores Aritmetricas</title>
</head>
<body>
    <div>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos n1 = $n1 e n2 = $n2 <br></h2>";
        $m = ($n1 + $n2) / 2;
        //echo "A soma vale $n1+$n2"; forma que da 3+2
        echo "n1 = $n1 e n2 = $n2 <br>";
        echo "A soma vale ". ($n1  + $n2);
        echo "<br> A subtracao vale ". ($n1 - $n2);
        echo "<br> A multiplicacao vale ". ($n1 * $n2);
        echo "<br> A divisao vale ". ($n1 / $n2);
        echo "<br> O modulo vale ". ($n1 % $n2);
        echo "<br> A media vale $m";
        ?>
    </div>
    
</body>
</html>