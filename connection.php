<?php
    $databaseHost = 'localhost';
    $databaseUsername = 'root';
    $databasePassword = "";
    $databaseName = 'zafreen';

    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if($conn === false)
    {
        die("connection error");
    }

?>