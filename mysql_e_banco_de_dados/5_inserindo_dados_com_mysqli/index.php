<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $table = "itens";
    $nome = "Xícara";
    $descricao = "É uma xícara usada de cor rosa";

    $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($q);

    $conn->close();