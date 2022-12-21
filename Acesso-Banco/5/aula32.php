<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Usando Select com PHP</title>
</head>
<body>
    <div>
        <h1>Bem Vindo</h1>
        <h2>Veja quantidade de registro da categoria 1</h2>
        <?php
            include "conexao.php";

            $vCat = $_POST["F_Cat"];
            $sql = "SELECT * FROM produtos WHERE cat = $vCat";

            $res = mysqli_query($conn, $sql);
            $linhas = mysqli_num_rows($res);
            echo "$linhas registros encontrados <br>";

            mysqli_close($conn);

        ?>
        <br>
        <a href="formAula-32.html">Voltar</a>
    </div>
    
</body>
</html>