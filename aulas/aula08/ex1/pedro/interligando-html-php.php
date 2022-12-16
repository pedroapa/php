<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Interligando formulários HTML com PHP</title>
</head>
<body>
    
    <div>
        <?php
            $numero = $_GET["num"];
            $num_raizq = sqrt($numero);
            echo "<h1>ex01 Ler um valor e mostrar sua raiz quadrada</h1>";
            echo "Você informou $numero e sua raiz quadadra é $num_raizq ";
        
        ?>
    </div>
    
</body>
</html>