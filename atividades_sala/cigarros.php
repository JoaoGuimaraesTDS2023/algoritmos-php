<?php

    $anos = readline("A quantos anos você fuma? ");

    if(is_numeric($anos)){
        
        if($anos > 0){
            
            $cigarros_ano = 11 * 10 * $anos * 365 / 60 / 24;
            $cigarros_ano = round($cigarros_ano);

            echo "Se você fumar 10 cigarros por $anos anos, você perderá $cigarros_ano dias de vida.";

        }else{

            echo "Digite um número válido!";
        }

    }else{
        echo "Digite um valor numérico!";
    }

    echo "\n"
?>
