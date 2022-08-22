<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operadores Relacionais</title>
</head>
<body>
    <div>
        <?php
        $idade = $_GET["ida"];
        $resposta = " ";
        echo "<h1>ex04 Mostre se um eleitor é obrigado a voltar ou não.</h1>";
        echo "<br>Informe na URL a sua idade e descubra se é obrigado a votar nessa eleição de 2022."

        $resposta = ($idade >= 18 && $idade <= 70) ? $resposta = "Sim" : $resposta = "Não";
        
        ?>
    </div>
    
</body>
</html>