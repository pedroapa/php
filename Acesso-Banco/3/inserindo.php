<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Testando Conexão</title>
</head>
<body>
    <div>
        <h1>Testando</h1>

        <?php
            include "conexao.php";

            $vNome = "";
            $vRua = "";
            $vCidade = "";
            $vEstado = "";
            $vLimit_credit = "";

            $sql = "insert into customers
            (id, name, street, city, state, credit_limit)
            values
            (DEFAULT, '$vNome', '$vRua', '$vCidade', '$vEstado', $vLimit_credit)";
            

            mysqli_close($conn);
        ?>
    </div>
    
</body>
</html>