<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <style>
        body {
            background-color: blue;
        }

        main {
            background-color: white;
            padding: 100px 0 100px 0;
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        table {
            margin: auto;
            text-align: left;
        }

        td {
            border: 1px solid black;
            padding: 5px;
        }

        td#nasc {
            text-align: center;
        }

        a {
            text-align: center;
            text-decoration: none;
            size: 1em;
            color: black;
            padding: 5px;
        }

        a:hover {
            size: 1.2em;
            text-decoration: underline;
            color: blue;
        }
    </style>
</head>
<body>
    <main>
        <h1>Todos os Registros Cadastrados</h1>
        <table>
            <thead>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Data Nascimento</th>
            </thead>
            <?php
            include "conexao.php";
            $sql = "SELECT nome, cpf, dt_nascimento FROM usuario ORDER BY nome";
            $res = mysqli_query($conn, $sql);
            //Apresentar na tela
            while( $reg = mysqli_fetch_row($res) ){
                $vNome = $reg[0];
                $vCpf = $reg[1];
                $vDt_nasc = $reg[2];
                echo "<tr>";
                echo "<td>$vNome</td><td>$vCpf</td><td id='nasc'>$vDt_nasc</td>";
                echo "</tr>";
            }
        ?>
        </table>
        <br><br>
        <a href="cadastro.html" target="_self" rel="next">Cadastrar Registro</a>
        <a href="exclusao.html" target="_self" rel="next">Apagar Registro</a>
    </main>
    
    
</body>
</html>