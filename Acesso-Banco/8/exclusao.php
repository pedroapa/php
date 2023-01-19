<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Registro</title>
    <style>
        body {
            background-color: blue;
        }

        main {
            background-color: white;
            margin: auto;
        }

        table {
            border-collapse: collapse;
        }

        thead {
            text-align: center;
            
        }

        th {
            border: 1px solid black;
            padding: 5px;
        }

        td {
            border: 1px solid black;
            padding: 5px;
        }

        td#escolha {
            text-align: center;
        }

    </style>
</head>
<body>
    <main>
        <h1>Selecione um Registro para ser Deletado</h1>
        

            <form action="excluir.php" method="post">
                <table>
                    <thead>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Data Nascimento</th>
                        <th>Selecionar</th>
                    </thead>
                    <?php
                        include "conexao.php";

                        $sql = "SELECT id, nome, cpf, dt_nascimento FROM usuario";
                        $res = mysqli_query($conn, $sql);

                        while( $reg = mysqli_fetch_row($res) ){
                            $id = $reg[0];
                            $vNome = $reg[1];
                            $vCpf = $reg[2];
                            $vNasc = $reg[3];

                            echo "<tr>";
                            echo "<td>$vNome</td><td>$vCpf</td><td>$vNasc</td>";
                            echo "<td id='escolha'><input type='radio' name='sel' value='$id'></td>";
                            echo "</tr>";

                        }
                    ?>
                </table>

                <br>
                <input type="submit" value="Excluir">
                <input type="reset" value="Limpar">
            </form>

            
        
    </main>
    
</body>
</html>