<?php

    /* erro de loop: funcao da surpresinha se repete varias vezes, pois a chamamos novamente antes dela terminar por completo; */
    
    #Lista constante com os valores de cada realize_aposta.
    const VALORES = array(

        "megasena" => array(

            "6" => 5.00,
            "7" => 35.00,
            "8" => 140.00,
            "9" => 420.00,
            "10" => 1050.00,
            "11" => 2310.00,
            "12" => 4620.00,
            "13" => 8580.00,
            "14" => 15015.00,
            "15" => 25025.00,
            "16" => 40040.00,
            "17" => 61880.00,
            "18" => 92820.00,
            "19" => 135660.00,
            "20" => 193800.00

        ),

        "quina" => array(

            "5" => 2.50,
            "6" => 15.00,
            "7" => 52.50,
            "8" => 140.00,
            "9" => 315.00,
            "10" => 630.00,
            "11" => 1155.00,
            "12" => 1980.00,
            "13" => 3217.50,
            "14" => 5005.00,
            "15" => 7507.50

        ),
        
        "lotomania" => array(

            "50" => 3.00

        ),
        
        "lotofacil" => array(

            "15" => 3.00,
            "16" => 48.00,
            "17" => 408.00,
            "18" => 2448.00,
            "19" => 11628.00,
            "20" => 46512.00

        )

    );

    #Lista constante com as quantidades de apostas maximas e minimas de cada jogo.
    const DEZENAS = array(

        "megasena" => array(

            "menor_numero" => 1,
            "maior_numero" => 60,
            "minimo_dezena" => 6,
            "maximo_dezena" => 20

        ),

        "quina" => array(

            "menor_numero" => 50,
            "maior_numero" => 80,
            "minimo_dezena" => 5,
            "maximo_dezena" => 15

        ),

        "lotomania" => array(

            "menor_numero" => 0,
            "maior_numero" => 99,
            "minimo_dezena" => 50,
            "maximo_dezena" => 50

        ),

        "lotofacil" => array(

            "menor_numero" => 1,
            "maior_numero" => 25,
            "minimo_dezena" => 15,
            "maximo_dezena" => 20

        ),

    );

    #Lista que armazena a surpresinha.
    $surpresinha = array();
    $surpresa = ""; #Variavel que armazena a string com os valores do array supresinha.

    $modo = ""; #Variavel que armazena qual modo ("manual" ou "surpresinha") o jogador escolheu

    #Variavel que recebe a loteria escolhida.
    $loteria = 0;

    #Quantidades de dezenas escolhidas pelo usuario.
    $dezena = 0;



    echo "\n Olá, sejá bem vindo ao meu simulador dos principais jogos de loteria do Brasil! \n\n";
    menu_loterias();

    function menu_loterias()
    {
        global $loteria;

        echo "+==============================+ \n";
        echo " Escolha a loteria que deseja: \n\n";
        echo " 1. Mega-Sena.\n";
        echo " 2. Quina.\n";
        echo " 3. Lotomania.\n";
        echo " 4. Lotofácil.\n\n";
        echo " 5. SORTEIO \n";
        echo " 6. INFORMAÇÕES\n";
        echo " 7. HISTÓRICO. \n\n";
        echo " 0. SAIR.\n\n";
        echo "+==============================+ \n";

        $opcoes = readline(" ");
        
        switch ($opcoes) 
        {
            case '1': echo "Você selecionou a Mega-Sena. \n"; $loteria = "megasena"; menu_selecao(); break; 

            case '2': echo "Você selecionou a Quina. \n"; $loteria = "quina"; menu_selecao(); break;
            
            case '3': echo "Você selecionou a Lotomania. \n"; $loteria = "lotomania"; menu_selecao(); break;
            
            case '4': echo "Você selecionou a Lotofácil. \n"; $loteria = "lotofacil"; menu_selecao(); break;

            case '5': echo "Você selecionou o Sorteio. \n"; sorteio(); break;

            case '6': echo "Você selecionou as Informações. \n"; mostre_informacoes(); break;
            
            case '7': echo "Você selecionou o Histórico. \n"; visualize_historico(); break;
            
            case '0': echo "Você selecionou Sair. \n"; die; break;
            
            default: echo "*OPÇÃO INVÁLIDA* \n"; menu_loterias(); break;
        }
    }

    function sorteio()
    {
        #blabla
    }

    function menu_selecao()
    {
        global $modo;

        $modo = "";

        echo "+==============================+ \n";
        echo " Escolha o que deseja: \n\n";
        echo " 1. Escolher Números. \n";
        echo " 2. Surpresinha. \n\n";
        echo " 0. VOLTAR.\n\n";
        echo "+==============================+ \n";

        $opcoes = readline(" ");

        switch($opcoes)
        {
            case '1': "Você selecionou Escolher Números. \n"; $modo = "manual"; verifique_dezenas(); break;
            
            case '2': "Você selecionou Sortear Surpresinha. \n"; $modo = "surpresinha" ;verifique_dezenas(); break;
            
            case '0': "Você selecionou Voltar. \n"; menu_loterias(); break;
            
            default: echo "*OPCÃO INVÁLIDA* \n"; menu_selecao(); break;
        }
    }

    function verifique_dezenas()
    {
        global $loteria, $dezena;

        echo "+==============================+ \n";
        echo " Quantas dezenas você deseja? \n(min: ". DEZENAS[$loteria]["minimo_dezena"] . " - max: " . DEZENAS[$loteria]["maximo_dezena"] . ") \n\n";
        echo "+==============================+ \n";
        $dezena = readline("");

        if( !( ($dezena >= DEZENAS[$loteria]["minimo_dezena"]) && ($dezena <= DEZENAS[$loteria]["maximo_dezena"]) ) )
        {
            echo "*QUANTIDADE DE DEZENAS INVÁLIDA* \n";
            verifique_dezenas();

        }else
        {
            
            informe_valor();

        }

    }

    function informe_valor()
    {
        global $loteria, $dezena, $modo;

        echo "+==============================+ \n";
        echo " Valor da aposta: R$ " . VALORES[$loteria][$dezena] . "\n";
        echo " 1. Comprar. \n";
        echo " 2. Escolher outra dezena. \n\n";
        echo " 0. VOLTAR \n";
        echo "+==============================+ \n";
        $comprar = readline("");

        switch($comprar)
        {
            case '1': echo "Você selecionou Comprar. \n"; $modo == "manual" ? escolha_numeros() : sorteie_surpresinha(); break;
            case '2': echo "Você selecionou Escolher Outra Dezena. \n\n"; verifique_dezenas(); break;
            case '0': echo "Você selecionou Voltar. \n"; menu_selecao(); break;
            default: echo "*OPÇÃO INVÁLIDA* \n"; informe_valor(); break;
        }
    }

    function mostre_informacoes()
    {
        echo "+==============================+ \n";
        echo " INFORMAÇÕES: \n\n";
        echo "+==============================+ \n";


    }

    function visualize_historico()
    {
        echo "+==============================+ \n";
        echo " HISTÓRICO (QUANTIDADE). \n\n";
        echo " Surpresinhas geradas: \n"; 
        echo "\t Mega-Sena: \n";
        echo "\t Quina: \n";
        echo "\t Lotomania: \n";
        echo "\t Lotofácil: \n";
        echo "\t TOTAL: \n";
        echo "\n ------------------------------ \n";
        echo " Apostas manuais feitas: \n"; 
        echo "\t Mega-Sena: \n";
        echo "\t Quina: \n";
        echo "\t Lotomania: \n";
        echo "\t Lotofácil: \n";
        echo "\t TOTAL: \n";
        echo "\n ------------------------------ \n";
        echo " Apostas compradas: \n";
        echo "\t Mega-Sena: \n";
        echo "\t Quina: \n";
        echo "\t Lotomania: \n";
        echo "\t Lotofácil: \n";
        echo "\t TOTAL: \n";
        echo "\n ------------------------------ \n";
        echo " Sorteios realizados: \n";
        echo "\t Mega-Sena: \n";
        echo "\t Quina: \n";
        echo "\t Lotomania: \n";
        echo "\t Lotofácil: \n";
        echo "\t TOTAL: \n";
        echo "\n ------------------------------ \n";
        echo " Sorteios ganhos: \n";
        echo "\t Mega-Sena: \n";
        echo "\t Quina: \n";
        echo "\t Lotomania: \n";
        echo "\t Lotofácil: \n";
        echo "\t TOTAL: \n";
        echo "\n ------------------------------ \n";
        echo " Valor gasto: \n";
        echo "\t Mega-Sena: \n";
        echo "\t Quina: \n";
        echo "\t Lotomania: \n";
        echo "\t Lotofácil: \n";
        echo "\t TOTAL: \n";
        echo "\n ------------------------------ \n";
        echo " DIGITE QUALQUER TECLA PARA SAIR\n\n";
        echo "+==============================+ \n";

        $sair = readline("");

        menu_loterias();
    }

    function escolha_numeros()
    {
        
    }

    function sorteie_surpresinha()
    {
        global $loteria, $surpresinha, $surpresa, $dezena;

        

        $numero_gerado = 0;
        $surpresa = "";

        limpa_lista($surpresinha);

        for($i = 0 ; count($surpresinha) < $dezena ; $i++)
        {
            $numero_gerado = rand(DEZENAS[$loteria]["menor_numero"], DEZENAS[$loteria]["maior_numero"]);

            if(in_array($numero_gerado, $surpresinha))
            {
                $i--;

            }else
            {
                $surpresinha[$i] = $numero_gerado;
            }

        }

        sort($surpresinha);

        for ($i=0; $i < count($surpresinha); $i++)
        { 
            $surpresa .= "$surpresinha[$i] ";
        }

        echo "\n\n";
        echo "SUPERSINHA GERADA: $surpresa \n\n";

        

    }

    function limpa_lista(array &$lista)
    {
        foreach($lista as $key => $valor)
        {
            $lista[$key] = "";
        }
    }

    function escreva_tabela(bool $voltar, string $titulo, string ...$linhas)
    {
        echo "+==============================+ \n";
        echo " $titulo: \n\n";
        
        foreach($linhas as $num => $linha)
        {
            echo " " . $num+1 . ". $linha \n";
        }

        echo "\n"; echo $voltar ? " 0. VOLTAR" : " 0. SAIR"; echo "\n\n";

        echo "+==============================+ \n";

    }

?>
