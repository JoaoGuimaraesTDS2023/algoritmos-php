<?php

    $resposta = 0;
    $suspeito = 0;

    $perguntas = array(
        "a" => "Telefonou para a vítima? ",
        "b" => "Esteve no local do crime? ",
        "c" => "Mora perto da vítima? ",
        "d" => "Devia para a vítima? ",
        "e" => "Já trabalhou com a vítima? ",
    );

    #Lê as respostas das perguntas.
    foreach($perguntas as $pergunta)
    { 
        $resposta = readline($pergunta . "[s] [n] ");

        if ($resposta == 's'){
            $suspeito += 1;
        }
        
        system('clear');
    }

    #Verifica e escreve qual o grau de suspeito.
    if($suspeito == 5){
        echo "Você é O ASSASSINO!";
    }elseif($suspeito > 2){
        echo "Você é o CÚMPLICE!";
    }elseif($suspeito == 2){
        echo "Você é um SUSPEITO!";
    }else{
        echo "Você é INOCENTE!";
    }

    echo "\n";

?>
