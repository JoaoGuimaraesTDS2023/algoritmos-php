<?php

    #variáveis globais:
    $dia = 16;
    $mes = 9;
    $ano = 8;
    $anjo = 0;
    $vagabundo = 0;
    #fim variáveis globais.

    safadometro(); #executa o código.

    ###Functions:###
    function safadometro() #function que executa todo o código.
    {
        leia_informacoes();
        repita();
    }

    function leia_informacoes() #function que lê os valores das variáveis 'dia', 'mes' e 'ano'.
    {
        global $dia, $mes, $ano; #utiliza as variáveis globais.

        #aqui, lemos os valores de cada varivel e retiramos os seus "0 à esquerda", caso haja.
        $dia = ltrim(readline("Digite o DIA em que você nasceu (dd): "), "0");
        $mes = ltrim(readline("Digite o MÊS em que você nasceu (mm): "), "0");
        $ano = ltrim(readline("Digite o ANO em que você nasceu (aa): "), "0");

        verifique_informacoes();
    }

    function verifique_informacoes() #function que verifica se os valores digitados são numéricos.
    {
        global $dia, $mes, $ano;

        system('clear'); #limpa a tela do terminal LINUX.

        #verifica se os valores informados são numéricos.
        if(is_numeric($dia) and is_numeric($mes) and is_numeric($ano)){

            verifique_nummeros_validos();
            anjo_vagabundo();

        }else{

            echo "Digite um número válido! \n"; #caso os valores não sejam números inteiros, ele pede os valores novamente.
            leia_informacoes();
        }
    }

    function verifique_nummeros_validos() #function que verifica se os valores númericos são válidos.
    {
        global $dia, $mes, $ano;

        #verifica se a "data" informada é válida. Ainda possui erro de verificação, pois não considera a quantidade de dias em um mês em específico.
        if($dia > 31 or $mes > 12 or $ano > 99){

            echo "Digite um valor válido e no formato indicado! \n";
            leia_informacoes();

        }
    }

    function anjo_vagabundo() #function que faz o calculo da porcentagem de anjo e vagabundo.
    {
        global $dia, $mes, $ano, $anjo, $vagabundo;

        $vagabundo = round(somatorio($mes) + ($ano/100) * (50 - $dia));
        $anjo = 100 - $vagabundo;

        musica();
    }

    function somatorio($num) #function que faz parte do calculo de anjo e vagabundo.
    {
        $soma = 0;

        #$soma é igual a soma de todos os numeros anteriores a um número $num.
        while($num < 0){
            $soma += $num;
            $num--;
        }

        return $soma;
    }
    function musica() #function que escreve todo o refrão da música com a porcentagem de anjo e vagabundo correspondentes.
    {
        global $anjo, $vagabundo;

        echo "Tô namorando todo mundo \n"; sleep(2);
        echo "$anjo% anjo, perfeito \n"; sleep(2);
        echo "Mas aquele $vagabundo% é vagabundo \n"; sleep(2);
        echo "Mas aquele $vagabundo% é vagabundo \n"; sleep(2);
        echo "Safado e elas gostam \n"; sleep(2);
    }

    function repita() #function que verifica se o usuário deseja testar sua "porcentagem de anjo e vagabundo" novanete.
    {

        $continuar = readline("Deseja continuar? \n[s] \t[n] \n");
        system('clear');

        switch ($continuar) 
        {
            case 's': safadometro();
            case 'n': break; #caso $continuar = 'n', o código será interrompido.
            default: repita();
        }
    }

    ###FIM DAS FUNCTIONS###
?>
