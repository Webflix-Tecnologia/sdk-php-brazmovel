<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../vendor/autoload.php";

$bramovelApi = new Brazmovel\Cliente([
    //'base_uri' => Brazmovel\Core\BrazmovelController::BASE_URL_TESTE,
]);

$bramovelApi->setToken('');

try{
    
    $bramovelApiResponse = $bramovelApi->listar([

    ]);
    
    Brazmovel\Helper\BrazmovelHelper::dump($bramovelApiResponse);
    
} catch (Telcom\Exceptions\TelcomException $ex) {

    Brazmovel\Helper\BrazmovelHelper::dump($ex);
    
}

