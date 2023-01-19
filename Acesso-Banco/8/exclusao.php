<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Registro</title>
</head>
<body>
    <main>
        <h1>Selecione um Registro para ser Deletado</h1>
        <table>
            <thead>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th>Selecionar</th>
            </thead>

            <?php
                include "conexao.php";

                $sql = "SELECT nome, cpf, dt_nascimento FROM usuario";
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
    </main>
    
</body>
</html>