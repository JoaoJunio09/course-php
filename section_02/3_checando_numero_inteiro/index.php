<?php

	if (is_int(5)) {
		echo 'É um inteiro 1 <br>';
	}

	if (is_int('Não é um inteiro')) {
		echo 'É um inteiro 2 <br>';
	}

	$a = 10;

	if (is_int($a)) {
		echo 'É um inteiro 3 <br>';
	}