<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 36 de PHP - MySQL: Deletando registros selecionados</title>
    <style>
        td {
            border: 1px solid black;
        }

        td#c_check {
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="aula36.php" method="post" name="f_excluir">
        
        <table>
            <tr>
                <td>Codigo</td><td>Nome</td><td>Selecionar</td>
            </tr>

            <?php
                include "conexao.php";

                $sql = "SELECT * FROM tb_cadastro order by cod";
                $res = mysqli_query($conn, $sql);

                while( $vreg = mysqli_fetch_row($res) ){
                    $vcod = $vreg[0];
                    $vnome = $vreg[1];

                    echo "<tr>";
                    echo "<td>$vcod</td><td>$vnome</td>";
                    echo "<td id='c_check'> <input type='checkbox' value='$vcod' name='sel[]'> </td>";
                    echo "</tr>";
                }

                mysqli_close($conn);
            
            ?>

        </table>

        <br>

        <input type="submit" value="Excluir" name="bt_excluir">
    </form>
    
</body>
</html>