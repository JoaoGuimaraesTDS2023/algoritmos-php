<?php

    $cadeia = (string) readline('String: ');
    $caractere = (string) readline('Char: ');

    function remova_caracter(string &$frase, string $caracter)
    {
        #muda as strings para letras minusculas.
        $frase = strtolower($frase); 
        $caracter = strtolower($caracter);

        $tamanhoAntigo = strlen($frase);
        $frase = str_replace($caracter, "", $frase); #apaga o caracter informado da string.
        $tamanhoNovo = strlen($frase); 

        $quantidadeLetras = $tamanhoAntigo - $tamanhoNovo;

        echo "\nNova String: $frase \n";
        echo "Quantidade de vezes que aparece o caracter \"$caracter\": $quantidadeLetras \n\n";
    }

    remova_caracter($cadeia, $caractere);

?>