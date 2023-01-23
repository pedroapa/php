<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "test";

    $conn = mysqli_connect($host, $user, $pass);
    mysqli_select_db($conn, $database);
    
?>