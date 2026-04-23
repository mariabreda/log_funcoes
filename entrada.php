<?php

require_once "biblioteca.php";

use function logica\verificaexercito;
use function matematica\somar;
use function texto\concatenar;
use function logica\verificaidade;

echo "soma: ", somar(1, 1), "\n";
echo "nome completo: ", concatenar("Maria", "breda"), "\n";
echo "Status: ", verificaidade(19), "\n";
echo "Resultado;", verificaexercito("Masculino", 19), "\n";
