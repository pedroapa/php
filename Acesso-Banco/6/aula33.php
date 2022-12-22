<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            
        }
    </style>
    <!--<link rel="stylesheet" href="../_css/estilo.css"> -->
    <title>Imprimindo os Registros do Banco com PHP</title>
</head>
<body>
    <div>
        <h2>Registros da Tabela Produtos</h2>
        <table>
            <tr>
                <td>Código</td><td>Produto</td><td>Preço</td><td>Quantidade</td><td>Categoria</td>
            </tr>

            <?php
            
                include "conexao.php";

                $vCat1 = $_POST["F_Cat1"];
                $vCat2 = $_POST["F_Cat2"];

                $sql = "SELECT * FROM produtos WHERE cat = $vCat1 OR cat = $vCat2";
                $res = mysqli_query($conn, $sql);

                while( $vReg = mysqli_fetch_row($res) ){
                    $vCod = $vReg[0];
                    $vProd = $vReg[1];
                    $vPreco = $vReg[2];
                    $vQtde = $vReg[3];
                    $vCat = $vReg[4];

                    echo "<tr>";
                    echo "<td>$vCod</td><td>$vProd</td><td>$vPreco</td><td>$vQtde</td><td>$vCat</td>";
                    echo "</tr>";
                }

                mysqli_close($conn);
        ?>
       </table>
        <br>
        <a href="formAula-33.html">Voltar</a>
    </div>
    
</body>
</html>