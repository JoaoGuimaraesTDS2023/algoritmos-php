<?php

    do
    {
        $numero = rand(0, 100); #sorteia um numero.

        echo "NOVO NÚMERO SORTEADO!"; sleep(1);

        do
        {
            system('clear'); #limpa o terminal.

            $chute = (int) readline("Digite um número entre 0 e 100: "); #le um numero.

            if($chute == $numero){ #compara o numero sorteado com o informado.

                echo "Você acertou! \n";
                break;

            }else{

                if($chute > $numero){
                    echo "O número é MENOR que o informado";
                }else{
                    echo "O número é MAIOR que o informado";
                }
                sleep(1);
            }

        }while($chute != $numero); #repete enquanto o número informado não seja igual ao sorteado.

        $continuar = readline("Deseja Continuar? [n] para sair. ");

    }while($continuar != "n"); #repete o programa enquanto o jogador quiser.
    
?>
