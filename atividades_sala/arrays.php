<?php

    $numeros = array();

    for($i=0 ; $i <= 5 ; $i++){

        $numeros[$i] = (float) readline("Digite o número inteiro (numeros[{$i}]): ");
            
        echo "\n";

        system('clear');
    }

    #Exibe array na ordem digitada.
    echo "\nARRAY NA ORDEM DIGITADA: \n";
    exibe_array();

    #Exibe array em ordem crescente.
    sort($numeros);
    echo "\nARRAY EM ORDEM CRESCENTE: \n";
    exibe_array();

    #Exibe o array em ordem decrescente.
    rsort($numeros);
    echo "\nARRAY EM ORDEM DECRESCENTE: \n";
    exibe_array();



    function exibe_array()
    {
        global $numeros;

        for($i=0; $i <= 5; $i++){ 
            echo "numeros[$i]: $numeros[$i] \n";
        }
    }
?>
