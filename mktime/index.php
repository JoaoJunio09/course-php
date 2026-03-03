<?php

    $dataNascimento = mktime(13, 12, 22, 01, 19, 2009);

    echo $dataNascimento . '<br>';

    echo date('d/m/Y', $dataNascimento);