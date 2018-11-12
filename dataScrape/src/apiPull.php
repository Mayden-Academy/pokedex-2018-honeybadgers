<?php

class apiPull
{
    private $pokemonJSONs;

    /**
     * apiPull constructor.  Pulls each pokemon JSON from api, and appends to $pokemonJSONs
     */
    public function __construct()
    {
        for ($i = 1; $i <= 4; $i++)
        {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://pokeapi.salestock.net/api/v2/pokemon/" . $i . '/',
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

            $this->pokemonJSONs[] = json_decode($response);
        }
    }

    /**
     * @return array contains a JSON for each pokemon
     */
    public function getPokemonJSONs(): array
    {
        return $this->pokemonJSONs;
    }
}