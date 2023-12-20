<?php
    $host = "localhost";
    $user = "root";
    $password = "hoje12"; 
    $db = "test";
    $conn = mysqli_connect($host, $user, $password);

    mysqli_select_db($conn, $db);
?>