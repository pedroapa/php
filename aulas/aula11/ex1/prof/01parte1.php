<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Curso do PHP - CursoEmVideo.com</title>
</head>
<body>
    <div>
        <?php
            $c = 1;
            while($c <= 10){
                echo $c. "<br>";
                $c++;
            }

            echo "<p>Mesmo esquema, mas regressiva: </p>";

            $c = 10;
            while($c >= 1){
                echo $c. "<br>";
                $c--;
            }

            echo "<p>Agora indo em 2 em 2 na contagem regressiva de 10 a 0</p>";

            $c = 10;
            while($c >= 0){
                echo $c. "<br>";
                $c -= 2; // OU $c = $c - 2;
            }
        ?>
    </div>
    
</body>
</html>