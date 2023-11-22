<?php

    $short = "p";

    $long = array(

        "pokemon:"

    );

    $options = getopt($short, $long);

    $nome = strtolower($options["pokemon"]);

    $dados_texto = file_get_contents("https://pokeapi.co/api/v2/pokemon/$nome");

    $pokemon = json_decode($dados_texto, true);

    echo "Nome: " . strtoupper($pokemon['name']) . "\n";
    echo "Altura: " . $pokemon['height']/10 . "m \n";
    echo "Peso: " . $pokemon['weight']/10 . "kg \n";
    echo "Movimentos: \n";

    foreach($pokemon['moves'] as $movimentos)
    {
        echo "\t>" . $movimentos['move']['name'] . "\n";
    }

?>
