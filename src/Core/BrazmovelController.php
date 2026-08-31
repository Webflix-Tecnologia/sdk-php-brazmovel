<?php

namespace Brazmovel\Core;

class BrazmovelController extends BrazmovelHttp{
    protected $token;

    public function __construct(array $config = []) {        
        parent::__construct($config);
    }
    
    public function getToken(){
        return $this->token;
    }

    public function setToken($token) {
        $this->token = 'Bearer ' . $token;
        return $this;
    }
}
