<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Descobrindo se Tem Aula</title>
</head>
<body>
    <div>
        <?php
            $diaSemana = isset($_GET["tDiaSemana"])?$_GET["tDiaSemana"]:1;

            switch ($diaSemana){
                case 1:
                case 7:
                    echo "Hoje NÃO tem aula";
                    break;
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Hoje tem aula";
                    break;
                default:
                    echo "Erro.";
            }
        ?>
    </div>
    
</body>
</html>