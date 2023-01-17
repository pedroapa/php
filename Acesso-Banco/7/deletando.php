<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletado</title>
</head>
<body>
    <main>

        <?php
            include "conexao.php";

            $vId = isset($_GET["tExclosao"])? $_GET["tExclosao"]: "0";

            echo "O Id deste registro é $vId!<br>";
        ?>

    </main>
    
</body>
</html>