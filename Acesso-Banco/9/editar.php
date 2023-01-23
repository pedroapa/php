<?php
    include "conexao.php";

    $vId = isset($_POST["id"])? $_POST["id"]: "0";
    $vNom = isset($_POST["tNom"])? $_POST["tNom"]: "";
    $vCpf = isset($_POST["tCpf"])? $_POST["tCpf"]: "";
    $vNasc = isset($_POST["tNasc"])? $_POST["tNasc"]: "";

    #Comando Sql
    $sql = "UPDATE usuario
    SET nome = '$vNom', cpf = '$vCpf', dt_nascimento = '$vNasc'
    WHERE id = $vId
    LIMIT 1";
    $res = mysqli_query($conn, $sql);

    if( mysqli_affected_rows($conn)){
        echo "Editado com sucesso.";
    }
    else {
        echo "Ocorreu uma falha.";
    }

    echo "<br><a href='inicio.php' target='_self' rel='prev'>Clique voltar</a>";

    mysqli_close($conn);
?>