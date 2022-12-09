<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_empresa";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        echo "Erro na conexão: ". mysqli_error($conn);
    }
?>