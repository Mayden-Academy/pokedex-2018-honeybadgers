<?php

class apiPull
{
    private $pokemonDataList;

    /**
     * apiPull constructor.  Pulls each pokemon JSON from api, and appends relevant data to PokemonDataList
     */
    public function __construct()
    {
        for ($i = 1; $i <= 2; $i++)
        {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon/" . $i . '/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache"
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            $pokemon = json_decode($response);

            $pokemonData = [
                'id' => $pokemon->id,
                'name' => $pokemon->name,
                'type_1' => $pokemon->types[0]->type->name,
                'type_2' => $pokemon->types[1]->type->name
            ];

            $this->pokemonDataList[] = $pokemonData;
            if ($i === 99) {
                sleep(60);
            }
        }
    }

    /**
     * @return array contains an array of data for each pokemon
     */
    public function getPokemonDataList(): array
    {
        return $this->pokemonDataList;
    }
}