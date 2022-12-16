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
            $valor = $_GET["v"];
            #rq = raiz quadrada
            $rq = sqrt($valor);
            echo "A raiz de $valor é igual a " . number_format($rq, 2);
            #se quiser que apareça virgula no lugar do ponto, por esses parametros depois de 2, ",", "."
            echo "<br>"
        ?>
        <a href="resp-html.html" target="_self" rel="prev">Voltar</a>
    </div>
    
</body>
</html>