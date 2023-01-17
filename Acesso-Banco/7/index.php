<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        main {
            font-size: medium;
            text-align: center;
        }

        table  {
            border-collapse: collapse;
            margin: auto; 
            text-align: left;
            margin-bottom: 20px;
        }

        td {
            border: 1px solid black;
            padding: 5px;
        }

        tr#campos {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: blue;

            padding: 10px;
        }

        a:hover {
            text-decoration: underline;
            padding: 15px;
        }

    </style>

    <title>Usuários Cadastrados</title>
</head>
<body>
    <main>
        <h1>Lista de Usuários Cadastrados</h1>
        <table>
            <tr id="campos">
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

                while( $reg = mysqli_fetch_row($res) ){
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
        <a href="registro.html" target="_self" rel="next">Cadastrar</a>
        <a href="apagar-registro.html" target="_self" rel="next">Deletar</a>
    </main>
    
</body>
</html>