<?php

namespace sistemageometria {

    function calcularImc($peso, $altura)
    {
        return $peso / ($altura * $altura);
    }

    function  valorIdealAgua($peso)
    {
        return $peso * 0.035;
    }

    function  frequenciaCardiacaMaxima($idade)
    {
        return 220 - $idade;
    }

    function  converterLibrasParaQuilo($libras)
    {
        return $libras * 0.4536;
    }

    function  calcularCaloriasBasais($peso, $idade, $altura, $sexo)
    { {
            if ($sexo == "Maculino") {
                return 66.5 + (13.75 * $peso) + (5.003 * $altura) - (6.75 * $idade);
            } else {
                return 655.1 + (9.563 * $peso) + (1.850 * $altura) - (4.676 * $idade);
            }
        }
    }
}
