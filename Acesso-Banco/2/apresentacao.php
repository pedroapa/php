<?php
    include "conexao.php";

    $res = mysqli_query($conn, "select * from customers");

    mysqli_close($conn);
?>

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
    </div>
    
</body>
</html>