<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Variáveis de Variáveis(Variaveis variantes)</title>
</head>
<body>
    <div>
        <?php
            $cliente = $_GET["nome"];
            $$cliente = "Vitor da Silva Andrade";
            echo "<h1>ex 4
            Vamos praticar o uso de variáveis de variáveis</h1>";
            echo "<br>Nome do Usuario cadastrado é : $cliente " . $$cliente;
            echo "<br><br>Este é o nome da variavel  que esta guardando o sobrenome. Testando ela aqui ($cliente) = $Pedro"
        ?>
    </div>
    
</body>
</html>