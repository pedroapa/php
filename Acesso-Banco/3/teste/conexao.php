<?php
    $host = "localhost";
    $user = "root";
    $password = "hoje12"; 
    $db = "db_empresa";
    $conn = mysqli_connect($host, $user, $password);

    mysqli_select_db($conn, $db);
?>