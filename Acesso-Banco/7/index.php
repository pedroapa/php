<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table  {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 5px;
        }

    </style>

    <title>Usuários Cadastrados</title>
</head>
<body>
    <main>
        <h1>Lista de Usuários</h1>
        <table>
            <tr>
                <td>Nome</td>
                <td>Rua</td>
                <td>Cidade</td>
                <td>Estado</td>
                <td>Limite Credito</td>
            </tr>
            <?php
                include "conexao.php";

                $sql = "SELECT name, street, city, state, credit_limit FROM customers";
                $res = mysqli_query($conn, $sql);

                while( $reg = mysqli_fetch_array($res) ){
                    $nome = $reg[0];
                    $rua = $reg[1];
                    $cidade = $reg[2];
                    $estado = $reg[3];
                    $lim_credito = $reg[4];

                    echo "<tr>";
                    echo "<td>$nome</td><td>$rua</td><td>$cidade</td><td>$estado</td><td>$lim_credito</td>";
                    echo "</tr>";
                }

                mysqli_close($conn);
            ?>
        </table>
    </main>
    
</body>
</html>