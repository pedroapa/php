<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecione Cadastro Para Ser Deletado</title>
    <style>
        h1 {
            text-align: center;
        }

        section {
            margin: auto;
        }

       /* tr#campos {
            text-align: center;
        } */
    </style>
</head>
<body>
    <main>
        <h1>Selecionte qual registro quer apagar</h1>

        <section>
            <form action="deletando.php" method="get">
                <span>Nome</span>
                <span>Rua</span>
                <span>Cidade</span>
                <span>Estado</span>
                <span>Limite</span>
                <span>Credito</span>
                <br>
                <?php
                    include "conexao.php";
                    $sql = "SELECT id, name, street, city, state, credit_limit FROM customers";
                    $res = mysqli_query($conn, $sql);

                    echo "<select name='tRegistro' id='cRegistro'>";

                    while( $reg = mysqli_fetch_row($res) ){
                        $id = $reg[0];
                        $nome = $reg[1];
                        $rua = $reg[2];
                        $cidade = $reg[3];
                        $estado = $reg[4];
                        $lim_credito = $reg[5];
            
                       
                        echo  "<option value='$id'>$nome    $rua    $cidade    $estado    $lim_credito </option>";
                    }

                    echo "</select>";
                ?>
                <br> <br>
                <input type="submit" value="Deletar">
                <input type="reset" value="Limpar">
            </form>
        </section>

            

    </main>
    
</body>
</html>