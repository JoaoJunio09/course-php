<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $q = "SELECT * FROM itens";

    $result = $conn->query($q);

    $conn->close();

    // UM RESULTADO
    // $itens = $result->fetch_assoc();

    // TODOS OS RESULTADOS
    $itens = $result->fetch_all();

    print_r($itens);