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
            text-align: center;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            text-align: left;
            margin-bottom: 20px;
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
                $vNome = $reg[1];
                $vCpf = $reg[2];
                $vNasc = $reg[3];

                echo "<tr>";
                echo "<td class='centro'>$vNome</td><td>$vCpf</td><td class='centro'>$vNasc</td>";
                echo "</tr>";

            }
            mysqli_close($conn);
        ?>
    </table>

    <a href="sel-reg.php" target="_self" rel="next">Editar</a>
   
</body>
</html>