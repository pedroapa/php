<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os Registros</title>
    <style>
        body {
            padding: 55px;
        }

        table {
            margin: auto;
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 5px;
        }

        .centro {
            text-align: center;
        }

    </style>
</head>
<body>  
    <table>
        <thead>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
        </thead>

        <?php
            include "conexao.php";

            $sql = "SELECT * FROM usuario";
            $res = mysqli_query($conn, $sql);

            while( $reg = mysqli_fetch_row($res) ){
                $vNome = $reg[0];
                $vCpf = $reg[1];
                $vNasc = $reg[2];

                echo "<tr>";
                echo "<td class='centro'>$vNome</td><td>$vCpf</td><td class='centro'>$vNasc</td>";
                echo "</tr>";
            }
        ?>
    </table>
   
</body>
</html>