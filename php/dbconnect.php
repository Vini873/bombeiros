<?php

    $host = "localhost";
    // $port = "3307";
    $username = "root";
    $password = "";
    $database = "dbdbdb";

    // cria a conexão
    $conn = mysqli_connect($host, $username, $password, $database);
    // verifica a conexão
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>