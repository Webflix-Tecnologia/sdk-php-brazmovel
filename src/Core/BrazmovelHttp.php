<?php

namespace Brazmovel\Core;

use GuzzleHttp\Client;

class BrazmovelHttp {
    protected Client $http;
    protected $config;
    
    const BASE_URL = 'https://api.brazmovel.com.br/';
    const BASE_URL_TESTE = 'https://teste-api.brazmovel.com.br/v1';
           
    public function __construct(array $config = []) {    
        
        $defaultConfig = array(
            'base_uri' => self::BASE_URL,
            'timeout' => 30,
            'headers' => array(
                'content-type' => 'application/json'
            )
        );
        
        $this->config = array_merge($defaultConfig, $config);
                
        $this->http = new Client($this->config);
    }
}
