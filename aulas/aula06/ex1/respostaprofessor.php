<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Racicionio do Professor</title>
</head>
<body>
    <div>
        <?php
            $preco = $_GET["p"];
            echo "O preço do produto é R$ " . number_format($preco, 2, ",", ".");
            //$preco = $preco + ($preco*10/100); forma antiga, sem operador de atribuição
            $preco += $preco*10/100;
            echo "<br> E novo preço com 10% de aumento sera R$ " . number_format($preco, 2, ",", "."); 
            
            
        ?>
    </div>
    
</body>
</html>