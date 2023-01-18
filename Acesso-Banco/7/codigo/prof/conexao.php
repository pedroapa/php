<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "test";

    $conn = mysqli_connect($host, $user, $password);
    mysqli_select_db($conn, $database); 

?>