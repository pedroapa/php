<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Aula 30 de PHP - MySQL: Comando Insert</title>
</head>
<body>
    <div>
        <?php
        include "conexao.php";

        $vNome = "Elitor Ali";
        $vRua = "Arvore";
        $vCidade = "Taubaté";
        $vEstado = "SP";
        $vLimit_credit = 100;

        $sql = "insert into customers
        (id, name, street, city, state, credit_limit)
        values
        (DEFAULT, '$vNome', '$vRua', '$vCidade', '$vEstado', $vLimit_credit)";

        $res = mysqli_query($conn, $sql);
        $num = mysqli_affected_rows($conn);

        echo "$num registro inserido.";
        

        mysqli_close($conn);
    ?>
        

    </div>
    
</body>
</html>