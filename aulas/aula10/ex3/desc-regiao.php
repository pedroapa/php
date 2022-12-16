<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Descobrindo o Estado</title>
</head>
<body>
    <div>
        <?php
            $estado = isset($_GET["tEstado"])?$_GET["tEstado"]:"";

            switch ($estado){
                #Região Norte
                case "AC":
                case "AP":
                case "AM":
                case "PA":
                case "RO":
                case "RR":
                case "TO":
                    echo "Região Norte";
                    break;
                #Região Nordeste
                case "MA":
                case "PI":
                case "CE":
                case "RN":
                case "PB":
                case "PE":
                case "AL":
                case "SE":
                case "BA":
                    echo "Região Nordeste";
                    break;
                #Centro-Oeste
                case "GO":
                case "MT":
                case "MS":
                case "DF":
                    echo "Região Centro-Oeste";
                    break;
                #Sudeste
                case "ES":
                case "MG":
                case "RJ":
                case "SP":
                    echo "Região Sudeste";
                    break;
                #Sul
                case "SC":
                case "PN":
                case "RS":
                    echo "Região Sul";
                    break;
                default:
                    echo "Erro.";
            }

        ?>
        <br>
        <a href="regiao-estado.html" target="_self" rel="prev">Voltar</a>

    </div>
    
</body>
</html>