<?php

    $short = "p";

    $long = array(

        "pokemon:"

    );

    if($argv[1] != NULL)
    {
        $options = getopt($short, $long);
        $nome = strtolower($options["pokemon"]);

    }else
    {
        $nome = strtolower(readline("Nome do Pokemon: "));
    }

    pokedex($nome);

    function pokedex(string $nome)
    {
        $dados_texto = file_get_contents("https://pokeapi.co/api/v2/pokemon/$nome");

        $pokemon = json_decode($dados_texto, true);

        $informacoes_pokemon = array(

            "Nome" => strtoupper($pokemon['name']),
            "Altura" => $pokemon['height'] / 10 . "m",
            "Peso" => $pokemon['weight'] / 10 . "kg",
        );

        foreach($informacoes_pokemon as $key => $valor)
        {
            echo "$key: $valor \n";
        }

        echo "Movimentos: \n";

        foreach($pokemon['moves'] as $movimentos)
        {
            echo "\t-" . $movimentos['move']['name'] . "\n";
        }
    }

?>
