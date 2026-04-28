<?php

require_once "bibliotecaFuncoes.php";

use function geometria\areaQuadrado;
use function geometria\areaRetangulo;
use function geometria\areaTriangulo;
use function geometria\areaCirculo;
use function geometria\areaTrapezio;

echo "Valor da area do quadrado: ", areaQuadrado(5), "\n";
echo "Valor da area do retangulo ", areaRetangulo(4, 5), "\n";
echo "Valor da area do triangulo: ", areaTriangulo(3, 5), "\n";
echo "Valor da area do circulo: ", areaCirculo(4), "\n";
echo "Valor do trapezio: ", areaTrapezio(3, 5, 2), "\n";
