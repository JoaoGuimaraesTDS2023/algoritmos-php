<!DOCTYPE html>
<html lang="pt">

    <head>
        <title>Pokedex</title>

        <style>

            #pesquisa {

                background: #e3350d;
                font-family: 'Courier New', Courier, monospace;
                padding: 100px;
                text-align: center;

            }

            #pokemons {

                font-family: 'Courier New', Courier, monospace;

            }

            .pokemon {

                width: 15%;
                border: double 5px #313131 ;
                padding: 5px;
                margin: 5px;
                text-align: center;
                float: left;
                
            }

            .pokemon img {

                max-width: 100%;

            }

        </style>
    </head>

    <body>

        <div id="pesquisa">
            <form>
                <input type="text" placeholder="Digite o nome do pokemon">
                <input type="submit" value="buscar">
            </form>
        </div>

        <div id="pokemons">

            <?php for($i = 0 ; $i < 10 ; $i++): ?>

                <div class="pokemon">

                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png" alt="nome" width="200px" height="200px">

                    <h1>NOME</h1>
                    <p>Altura</p>
                    <p>Peso</p>

                </div>
            <?php endfor; ?>

        </div>

    </body>
</html>
