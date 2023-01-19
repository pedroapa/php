<?php
    include "conexao.php";

    $id = isset($_POST["sel"])? $_POST["sel"]: "";

    $sql = "DELETE FROM usuario
    WHERE id = $id
    LIMIT 1";

    if( mysqli_affected_rows($conn)){
        echo "O registro foi excluido com sucesso.";
    }
    else{
        echo "Falha na exclusão";
    }
?>