<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Processamento das informações</title>
</head>
<body>
    <div>
        <?php
            $nome = $_GET["nom"];
            $sexo = $_GET["sex"];
            $ano = $_GET["nasc"];
            $idade = 2022 - $ano;
            echo "A pessoa com nome $nome e do sexo $sexo, nascida no ano de $ano tem $idade anos "; 
        ?>
    </div>
    
</body>
</html>