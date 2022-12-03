<?php
    $databaseHost = 'localhost';
    $databaseUsername = 'root';
    $databasePassword = "";
    $databaseName = 'zafreen';

    $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    if($conn->connect_error) {
        echo $conn->connect_error;
    } else {
        return $conn;
    }
    ?>