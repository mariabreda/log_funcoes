<?php

namespace geometria {

    function areaQuadrado($lado)
    {
        return $lado * $lado;
    }

    function  areaRetangulo($base, $altura)
    {
        return $base * $altura;
    }

    function  areaTriangulo($base, $altura)
    {
        return $base * $altura / 2;
    }

    function   areaCirculo($raio)
    {
        return $raio * $raio;
    }

    function  areaTrapezio($baseMaior, $baseMenor, $altura)
    {
        return ($baseMaior + $baseMenor) * $altura / 2;
    }
}
