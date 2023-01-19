<?php
    include "conexao.php";

    $vNome = isset($_POST["tNom"])? $_POST["tNom"]: "Fulano";
    $vCpf = isset($_POST["tCpf"])? $_POST["tCpf"]: "111-11-1111";
    $vDt_nasc = isset($_POST["tNasc"])? $_POST["tNasc"]: "2000-01-01";

    $sql = "INSERT INTO usuario 
    (id, nome, cpf, dt_nascimento)
    values
    (DEFAULT, '$vNome', '$vCpf', '$vDt_nasc')";
    $res = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){
        echo "Cadastro realizado com sucesso.";
    }
    else{
        echo "Falha no cadastro.";
    }
    echo "<br> <a href='inicial.php' target='_self' rel='prev'>Voltar Início</a>";
?>
    