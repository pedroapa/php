<?php
    $host = "localhost";
    $user = "root";
    $pass = "hoje12";
    $database = "test";

    $conn = mysqli_connect($host, $user, $pass);
    mysqli_select_db($conn, $database);

?>