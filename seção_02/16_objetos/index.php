<?php

	class Pessoa {

		function falar() {
			echo "Olá Pessoal!";
		}

	}

	$matheus = new Pessoa();

	$matheus->nome = "Matehus";
	echo $matheus->nome;
	echo "<br>";
	$matheus->falar();
