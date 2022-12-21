<?php
    $host = "localhost";
    $user = "root";
    $password = ""; 
    $db = "test";
    $conn = mysqli_connect($host, $user, $password);

    mysqli_select_db($conn, $db);
?>