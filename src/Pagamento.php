<?php

namespace Brazmovel;

use Brazmovel\Core\BrazmovelController;
use Brazmovel\Exceptions\BrazmovelException;
use Exception;
use GuzzleHttp\Exception\RequestException;

class Pagamento extends BrazmovelController{
   
    public function criar(array $data){        
        try{
            $response = $this->http->post('v1/payment', [
                "headers" => [
                    'Authorization' => $this->getToken(),
                ],
                'json' => $data,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw BrazmovelException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new BrazmovelException($ex);
        }
    }
    
    public function capturar($pagamentoId){        
        try{
            $response = $this->http->post(vsprintf('v1/payment/%s/capture', [
                $pagamentoId
            ]), [
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
