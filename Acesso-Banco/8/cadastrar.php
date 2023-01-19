<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando</title>
</head>
<body>
    <?php
        include "conexao.php";

        $vNome = isset($_POST["tNom"])? $_POST["tNom"]: "Fulano";
        $vCpf = isset($_POST["tCpf"])? $_POST["tCpf"]: "111-11-1111";
        $vDt_nasc = isset($_POST["tNasc"])? $_POST["tNasc"]: "2000-01-01";

        $sql = "insert into usuario 
        (id, nome, cpf, dt_nascimento)
        values
        (DEFAULT, '$vNome', '$vCpf', $vDt_nasc)";

        if(mysqli_affected_rows($conn)){
            echo "Cadastro realizado com sucesso.";
        }
        else{
            echo "Falha no cadastro.";
        }
    ?>
    
</body>
</html>