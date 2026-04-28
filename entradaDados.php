<?php

require_once "bibliotecaFuncoes.php";

use function conversao\dolarParaReal;
use function conversao\europarareal;
use function conversao\ieneParaReal;
use function conversao\libraParaReal;
use function conversao\pesoParaReal;

//Atividade 1
echo "Valor do dólar: ", dolarParaReal(100, 5), "\n";
echo "Valor do euro: ", europarareal(100, 5.85), "\n";
echo "Valor do peso: ", pesoParaReal(100, 0.0035), "\n";
echo "Valor da libra: ", libraParaReal(100, 6.74), "\n";
echo "Valor do iene: ", ieneParaReal(100, 0.031), "\n";
