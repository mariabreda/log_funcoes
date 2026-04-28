<?php

require_once "bibliotecaFuncoes.php";

use function sistemageometria\calcularImc;
use function sistemageometria\valorIdealAgua;
use function sistemageometria\frequenciaCardiacaMaxima;
use function sistemageometria\converterLibrasParaQuilo;
use function sistemageometria\calcularCaloriasBasais;

echo "Valor do imc: ", calcularImc(45, 1.60), "\n";
echo "Valor ideal de agua: ", valorIdealAgua(45), "\n";
echo "Valor frequencia cardiaca maxima: ", frequenciaCardiacaMaxima(16), "\n";
echo "Valor em quilos: ", converterLibrasParaQuilo(130), "\n";
echo "Valor calorias basais: ", calcularCaloriasBasais(45, 16, 1.60, "Masculino"), "\n";
