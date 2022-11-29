<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class IbgeApiService
{

    public function __construct()
    {
        $this->client = new Client([
            "base_uri" => 'https://servicodados.ibge.gov.br/api/v1/',
            "verify" => false,
            "timeout" => 5.0
        ]);
    }

    public function getRegions()
    {

        try {
            $response = $this->client->get('localidades/regioes');
        } catch (GuzzleException $exception) {
            return ['error' => $exception->getCode()];
        }

        return json_decode($response->getBody(), true);

    }

    public function getData(int $region)
    {

        $uri = sprintf('projecoes/populacao/%d', $region);

        try {
            $response = $this->client->get($uri);
        } catch (GuzzleException $exception) {
            return ['error' => $exception->getCode()];
        }

        return json_decode($response->getBody(), true);

    }

}