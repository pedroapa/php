<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            #$b = $a; sem referencia
            $b = &$a; # criando $b referencial (ponteiro)
            $b += 5;
            echo "A variavel A vale $a";
            echo "<br>A variavel B vale $b";
        ?>
    </div>
    
</body>
</html>