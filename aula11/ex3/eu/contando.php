<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Contando Aumentando ou Diminuindo</title>
</head>
<body>
    <div>
        <?php
            $inicial = isset($_GET["tIncial"]) ? $_GET["tInicial"] : 1;
            $final = isset($_GET["tFinal"]) ? $_GET["tFinal"] : 10;
            $conta = isset($_GET["tCont"]) ? $_GET["tCont"] : 1;
            
            if( $inicial < $final ){
                while( $inicial < $final ){
                    echo $inicial. " ";
                    $inicial += $conta;
                    $conta += $conta;
                }
            }
            else {
                echo "Erro";
            }

        ?>
    </div>
    
</body>
</html>