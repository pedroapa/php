<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionando Campo</title>
    <style>
        body {
            text-align: center;
        }

        
        table {
            text-align: left;
            margin: auto;
        }

        thead {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="editar.php" method="post">
        <table>
            <thead>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
            </thead>
            <?php
                include "conexao.php";

                $vId = isset($_POST["sel"])? $_POST["sel"]: '0';
                
                $sql = "SELECT * FROM usuario
                WHERE id = $vId";
                $res = mysqli_query($conn, $sql);

                $reg = mysqli_fetch_row($res);
                $vNome = $reg[1];
                $vCpf = $reg[2];
                $vNasc = $reg[3];
                
                echo "<tr>";
                echo "<td><input type='text' name='tNom' id='cNom' value='$vNome'></td>";
                echo "<td><input type='text' name='tCpf' id='cCpf' value='$vCpf'></td>";
                echo "<td><input type='date' name='tNasc' id='cNasc' value='$vNasc'></td>";
                echo "</tr>";
            ?>
            <br>
            <input type="submit" value="Salvar">
            <a href="sel-reg.php" target="_self" rel="prev">Cancelar</a>
        </table>
    </form>
    
</body>
</html>