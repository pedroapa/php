<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Cadastrando no Banco</title>
</head>
<body>
    <div>
        <h1>BANCO DE DADOS</h1>

        <?php
            include "conexao.php";

            $vNome = isset($_GET['tNome']) ? $_GET['tNome']: 'Fulano';
            $vIdade = isset($_GET['tIdade']) ? $_GET['tIdade'] : 0; 

            $sql = " INSERT INTO teste
            (nome, idade)
            values
            ('$vNome', '$vIdade')";

            echo "Parece que foi";

            mysqli_query($conn, $sql);
        ?>
        <br>
        <a href="cadastrando.html" target="_self" rel="prev">Voltar</a>
    </div>
    
</body>

<?php
    mysqli_close($conn);
?>
</html>