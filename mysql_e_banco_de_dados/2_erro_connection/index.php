<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    if ($conn->connect_errno) {
        echo "Erro na conexão <br>";
        echo "Erro: " . mysqli_connect_error();
        echo "Erro: " . $conn->connect_error;
    }