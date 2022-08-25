<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Vendo a Situação do Aluno</title>
</head>
<body>
    <div>
        <?php 
            $nota1 = isset($_GET["no1"])?$_GET["no1"]:0;
            $nota2 = isset($_GET["no2"])?$_GET["no2"]:0;
            $media = ($nota1 + $nota2)/2;
            $situacao = "";
            echo "A média entre " . number_format($nota1,2) . " e " . number_format($nota2, 2) . " é igual a " . number_format($media, 2);
            
            if ($media > 5) {
                $situacao = "REPROVADO";
            }
            elseif ($media >= 5 && $media < 7) {
                $situacao = "RECUPERAÇÃO";
            }
            else {
                $situacao = "APROVADO";
            }

            echo "<br>Situação do aluno: $situacao <br>";
        ?>
        <a href="ex3media.html" target="_self" rel="prev">Voltar</a>
    </div>
    
</body>
</html>