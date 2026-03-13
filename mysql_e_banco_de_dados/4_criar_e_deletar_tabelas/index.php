<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $q = "DROP TABLE teste";

    $conn->query($q);

    $conn->close();