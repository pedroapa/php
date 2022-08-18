<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Variavel Refereciada(ponteiro)</title>
</head>
<body>
    <div>
        <?php
            $a = $_GET["valor"];
            #$b = $a;
            $b = &$a;
            echo "<h1>exercicio 03
            vamos praticar o uso de variveis referenciadas</h1>";
            echo "Sa = $a <br>";
            echo "Sb = Sa <br>";
            echo "Sb = $b <br><br>";

            echo " Sb += Sa <br>";
            echo "$b += $a <br>";
            $b += $a;
            echo "Valor de Sa = $a <br>";
            echo "Valor de Sb = $b <br>";
        ?>
    </div>
    
</body>
</html>