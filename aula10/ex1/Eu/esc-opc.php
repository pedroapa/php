<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Processando</title>
</head>
<body>
    <div>
        <?php
            $num = isset($_GET["tNum"])?$_GET["tNum"]:2;
            $opcao = isset($_GET["tOp"])? $_GET["tOp"]: "dobro";
            $resultado = 0;
            switch ($opcao) {
                case "dobro":
                    $resultado = $num * 2;
                    break;
                case "cubo":
                    $resultado = pow($num, 3);
                    break;
                case "raiz":
                    $resultado = sqrt($num);
                    break;
                default:
                    echo "Erro";
            }
            echo "O número: $num efetuado a opção $opcao dando como saida: ". number_format($resultado, 2, ",", ".") . "<br>";
        ?>
        <br>
        <a href="switch1.html" target="_self" rel="prev">Clique Voltar</a>
    </div>
    
</body>
</html>