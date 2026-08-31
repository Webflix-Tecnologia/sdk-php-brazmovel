<?php

namespace Brazmovel;

use Brazmovel\Core\BrazmovelController;
use Brazmovel\Exceptions\BrazmovelException;
use Exception;
use GuzzleHttp\Exception\RequestException;

class Plano extends BrazmovelController{

    const PURCHAGE_TYPE_SUBSCRIPTION = 'subscription';
    const PURCHAGE_TYPE_ONE_TIME = 'one_time';
    
    public function criar(array $data){        
        try{
            $response = $this->http->post('v1/plan', [
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
    
    public function listar($linhaId, array $query = []){        
        try{
            $response = $this->http->get(vsprintf('v1/line/%s/plan', [
                $linhaId
            ]), [
                "headers" => [
                    'Authorization' => $this->getToken(),
                ],
                "query" => $query,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw BrazmovelException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new BrazmovelException($ex);
        }
    }
    
    public function cancelar($planoId){        
        try{
            $response = $this->http->get(vsprintf('v1/plan/%s/cancel', [
                $planoId
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
    
    public function pagamentos($planoId){        
        try{
            $response = $this->http->get(vsprintf('v1/plan/%s/payment', [
                $planoId
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
