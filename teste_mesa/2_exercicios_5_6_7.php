<?php

    #matriz utilizada nos exercicios 5 e 6.
    $numeros = array(

        array(1, 3, 5),
        array(7, 9, 11),
        array(13, 15, 17)

    );

    #exercicio 5, mostra uma matriz na tela com as linhas e colunas separadas.
    function exercicio_5(array $lista) 
    {
        for($i = 0 ; $i < count($lista); $i++)
        { 
            for ($j = 0 ; $j < count($lista[$i]); $j++)
            { 
                echo $lista[$i][$j] . "\t";
            }
            echo "\n";
        }
    }

    #exercicio 6, mostra a soma de todos os valores de uma matriz com valores inicializados.
    function exercicio_6(array $lista)
    {
        $soma = 0;

        for($i = 0 ; $i < count($lista); $i++)
        { 
            for ($j = 0 ; $j < count($lista[$i]); $j++)
            { 
                $soma += $lista[$i][$j];
            }
        }

        echo "$soma\n";
    }

    #exercicio 7, pede para o usuario informar os valores de uma matriz e depois mostra os valores de acordo com a sua posicao.
    function exercicio_7(int $linhas, int $colunas)
    {
        $matriz = array();

        for($i = 0 ; $i < $linhas; $i++)
        { 
            for ($j = 0 ; $j < $colunas; $j++)
            { 
                $matriz[$i][$j] = readline("[$i][$j]: ");
            }
        }

        echo "\nMATRIZ DIGITADA: \n";

        exercicio_5($matriz);
    }

    ### execucao das funcoes ###
    echo "\nARRAY: \n";
    exercicio_5($numeros);

    echo "\nSOMA: \n";
    exercicio_6($numeros);

    echo "\nDIGITE A MATRIZ: \n";
    exercicio_7(3, 5);

?>