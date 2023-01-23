<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dtbase = "test";

    $conn = mysqli_connect($host, $user, $pass);
    mysqli_select_db($conn, $dtbase);
?>