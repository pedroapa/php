<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do professor eleições</title>
</head>
<body>
    <?php 
        $ano = $_GET["an"];
        $idade = 2014 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos";
    ?>
    
</body>
</html>