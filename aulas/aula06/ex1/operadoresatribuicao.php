<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <div>
        <?php
            $preco = $_GET["valor"];
            echo "exercicio 1
            aplicar 10% de desconto ao preço de um produto"; 
            echo "<h1>Loja de roupas</h1>";
            echo "<br> O item comprado tem valor de R$" . number_format($preco, 2, ",", ".") . " reais";
            //jeito feio
            //$preco = $preco - $preco * 0.1; // 10%
            $preco -= $preco * 0.1;
            echo "<br>Voce tem 10% de desconto, então preço a pagar é R$ " . number_format($preco, 2, ",", ".") . "reais";
        ?>
    </div>
    
</body>
</html>