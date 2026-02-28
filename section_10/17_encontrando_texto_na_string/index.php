<?php

	$str = "Estamos testando o método strpos, com o strpos podemos encontras strings";

	$testeEncontrar = strpos($str, "strpos");

	echo "$testeEncontrar <br>";

	$testeEncontrar2 = strpos($str, "java");

	echo "$testeEncontrar2 <br>";

	if (!$testeEncontrar2) {
		echo "palavra nao encontrada";
	}