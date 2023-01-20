<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecione Registro</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
        }

        table {
            text-align: left;
            margin: auto;
            border-collapse: collapse;
            /*margin-bottom: 20px;*/
        }

        td {
            border: 1px solid black;
            padding: 5px;
        }

    </style>
</head>
<body>
    <form action="sel-campo.php" method="post">
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
                    $id = $reg[0];
                    $vNome = $reg[1];
                    $vCpf = $reg[2];
                    $vNasc = $reg[3];

                    echo "<tr>";
                    echo "<td>$vNome</td><td>$vCpf</td><td>$vNasc</td>";
                    echo "<td><input type='radio' name='sel' value='$id'></td>";
                    echo "</tr>";
                }

                

            ?>

        </table>
        <br>
        <input type="submit" value="Selecionar">
    </form>
    
</body>
</html>