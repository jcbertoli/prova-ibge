<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class IbgeApiServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_getRegions()
     {

        $expectedData =  [
            [
                  "id" => 1, 
                  "sigla" => "N", 
                  "nome" => "Norte" 
               ], 
            [
                     "id" => 2, 
                     "sigla" => "NE", 
                     "nome" => "Nordeste" 
                  ], 
            [
                        "id" => 3, 
                        "sigla" => "SE", 
                        "nome" => "Sudeste" 
                     ], 
            [
                           "id" => 4, 
                           "sigla" => "S", 
                           "nome" => "Sul" 
                        ], 
            [
                              "id" => 5, 
                              "sigla" => "CO", 
                              "nome" => "Centro-Oeste" 
                           ] 
         ]; 

        // Prepare
        
        // Execute
        Http::fake(['https://servicodados.ibge.gov.br/api/v1/localidades/regioes' => Http::response([$expected_data], 200])
        
        // Assert

    }
}
