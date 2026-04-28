<?php

require_once "bibliotecaFuncoes.php";

use function conversao\dolarParaReal;
use function conversao\euroParaReal;
use function conversao\pesoParaReal;
use function conversao\libraParaReal;
use function conversao\ieneParaReal;
use function sistemageometria\calcularImc;
use function sistemageometria\valorIdealAgua;
use function sistemageometria\frequenciaCardiacaMaxima;
use function sistemageometria\converterLibrasParaQuilo;
use function sistemageometria\calcularCaloriasBasais;




$op = "";
$opcoes = "";

while ($opcoes != "4") {
    echo "\n Escolha uma das categorias: \n 1.Conversão \n 2.Geometria \n 3.Saúde \n 4.Sair";

    $opcoes = readline(">>");

    switch ($opcoes) {

        case 1:
            while ($op != "6") {
                echo "\n Menu: \n 1.Conversão para dólar \n 2.Conversão para euro \n 3.Conversão para peso \n 4.Conversão para libra \n 5.Conversão para iene \n 6.Sair \n";

                $op = readline(">>");
                switch ($op) {
                    case 1:
                        $dolar = readline("Digite a quantidade de dólares:");
                        $dolarcotacao = readline("Digite o valor atual do dólar");

                        echo "Dólar para real:", dolarParaReal($dolar, $dolarcotacao), "\n\n";
                        break;

                    case 2:
                        $euro = readline("Digite a quantidade de euros:");
                        $eurocotacao = readline("Digite o valor atual do euro");

                        echo "euro para real:", euroParaReal($euro, $eurocotacao), "\n\n";
                        break;


                    case 3:
                        $peso = readline("Digite a quantidade de euros:");
                        $pesocotacao = readline("Digite o valor atual do euro");

                        echo "Peso para real:", pesoParaReal($peso, $pesocotacao), "\n\n";
                        break;


                    case 4:
                        $libra = readline("Digite a quantidade de libras:");
                        $libracotacao = readline("Digite o valor atual da libra");

                        echo "Libra para real:", libraParaReal($libra, $libracotacao), "\n\n";
                        break;


                    case 5:
                        $iene = readline("Digite a quantidade de libras:");
                        $ienecotacao = readline("Digite o valor atual da libra");

                        echo "Iene para real:", ieneParaReal($iene, $ienecotacao), "\n\n";
                        break;

                    case 6:
                        echo "Saindo...";
                        break;

                    default:
                        echo "Opção invalida!";
                        break;
                }
            }
    }
}
