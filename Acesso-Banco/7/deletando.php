<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletado</title>
    <style>
        main {
            text-align: center;
        }
    </style>
</head>
<body>
    <main>

        <?php
            include "conexao.php";

            $vId = isset($_GET["tExclosao"])? $_GET["tExclosao"]: "0";

            $sql = "DELETE FROM customers
            WHERE id = '$vId'
            LIMIT 1";

            $res = mysqli_query($conn, $sql);
            
            if ( mysqli_affected_rows($conn)){
                echo "Deletado com sucesso!";
            }
            else {
                echo "Falha no processo.";
            }

        ?>
        <br> <br>
        <a href="indexx.php" target="_self" rel="prev">Voltar página inicial</a>
    </main>
    
</body>
</html>