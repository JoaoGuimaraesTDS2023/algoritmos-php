<?php

    $dia = 16;
    $mes = 9;
    $ano = 8;
    $soma = 0;
    $anjo = 0;
    $vagabundo = 0;

    function safadometro()
    {
        leia_informacoes();
        anjo_vagabundo();
        musica();

    }

    function leia_informacoes()
    {
        $dia = readline("Digite o DIA em que você nasceu");
        $mes = 9;
        $ano = 8;
    }

    function anjo_vagabundo()
    {
        $vagabundo = somatorio($mes) + ($ano/100) * (50 - $dias);
        $anjo = 100 - $vagabundo;
    }

    function somatorio($num)
    {
        while($num < 0){
            $soma += $num;
            $num--;
        }

        return $soma;
    }

    function musica()
    {
        echo "Tô namorando todo mundo"; sleep(1);
        echo "$anjo% anjo, perfeito"; sleep(1);
        echo "Mas aquele $safadeza por cento é vagabundo"; sleep(1);
        echo "Mas aquele $safadeza por cento é vagabundo"; sleep(1);
        echo "Safado e elas gostam";
    }

    safadometro();
?>
