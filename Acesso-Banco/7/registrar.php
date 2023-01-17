<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastramento</title>
</head>
<body>
    <main>
        <?php
            include "conexao.php";

            $vNome = isset($_GET["tNom"])? $_GET["tNom"]: "";
            $vRua = isset($_GET["tRua"])? $_GET["tRua"]: "";
            $vCid = isset($_GET["tCid"])? $_GET["tCid"]: "";
            $vEst = isset($_GET["tESt"])? $_GET["tEst"]: "";
            $vLim_credito = isset($_GET["tLim-credito"])? $_GET["tLim-credito"]: "0.0";

            $sql = "INSERT INTO
            (id, name, street, city, state, credit_limit)
            VALUES
            (DEFAULT, $vNome, $vRua, $vCid, $vEst, $vLim_credito)";
            $res = mysqli_query($conn, $sql);

            if( mysqli_affected_rows($conn) ){
                echo "Cadastro feito com sucesso.";
            }
            else {
                echo "Erro no cadastro.";
            }

            mysqli_close($conn);
        ?>
    </main>
    
</body>
</html>