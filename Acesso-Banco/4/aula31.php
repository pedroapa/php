<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Aula 31 de PHP - MySQL: Comando Insert com Formulário</title>
</head>
<body>
    <div>
        <br>
        <a href="formAula-31.html">Voltar</a>

        <?php
            include "conexao.php";

            $vCod = $_POST["F_Cod"];
            $vProd = $_POST["F_Prod"];
            $vPreco = $_POST["F_Preco"];
            $vQtde = $_POST["F_Qtde"];

            $sql = "INSERT INTO produtos VALUES ('$vCod', '$vProd', $vPreco, $vQtde)";
            $res = mysqli_query($conn, $sql);
            $linhas = mysqli_affected_rows($conn);

            echo "<br>LINHAS = $linhas <br>";

            if( $linhas == 1 ){
                echo "<br>Registro gravado com sucesso <br>";
            }
            else{
                echo "<br>Falha na gravação do registro <br>";
            }

            mysqli_close($conn);
        ?>
    </div>
    
</body>
</html>