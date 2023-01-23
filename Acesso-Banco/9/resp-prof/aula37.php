<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 37 de PHP - Mysql Upadate</title>
</head>
<body>
    <?php
        include "conexao.php";
        //UPDATE tabela  SET campo a ser alterado WHERE condição
        $sql = "UPDATE tb_cadastro SET telefone = '3188888888' WHERE cod = '6'";

        $res = mysqli_query($conn, $sql);

        if( $res){
            echo "Registro atualizado com sucesso";
        }
        else{
            echo "ERRO na atualização do registro";
        }

        mysqli_close($conn);
    ?>
    
</body>
</html>