<?php

namespace Brazmovel;

use Brazmovel\Core\BrazmovelController;
use Brazmovel\Exceptions\BrazmovelException;
use Exception;
use GuzzleHttp\Exception\RequestException;

class Produto extends BrazmovelController{
   
    public function detalhes(){        
        try{
            $response = $this->http->get('v1/product', [
                "headers" => [
                    'Authorization' => $this->getToken(),
                ],
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw BrazmovelException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new BrazmovelException($ex);
        }
    }
        
}
