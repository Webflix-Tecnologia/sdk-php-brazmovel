<?php

namespace Brazmovel;

use Brazmovel\Core\BrazmovelController;
use Brazmovel\Exceptions\BrazmovelException;
use Exception;
use GuzzleHttp\Exception\RequestException;

class Linha extends BrazmovelController{
    
    public function criar(array $data){        
        try{
            $response = $this->http->post('v1/line', [
                "headers" => [
                    'Authorization' => $this->getToken(),
                ],
                "json" => $data,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw BrazmovelException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new BrazmovelException($ex);
        }
    }
    
    public function bloquear($linhaId){        
        try{
            $response = $this->http->post(vsprintf('v1/line/%s/block', [
                $linhaId
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
    
    public function desbloquear($linhaId){        
        try{
            $response = $this->http->post(vsprintf('v1/line/%s/unblock', [
                $linhaId
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
    
    public function listar(array $query = []){        
        try{
            $response = $this->http->get('v1/line', [
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
    
    public function detalhesPorId($linhaId){        
        try{
            $response = $this->http->get(vsprintf('v1/line/%s', [
                $linhaId
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
    
    public function pagamentos($linhaId){        
        try{
            $response = $this->http->get(vsprintf('v1/line/%s/payment', [
                $linhaId
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
    
    public function utilizacao($linhaId){        
        try{
            $response = $this->http->get(vsprintf('v1/line/%s/usage', [
                $linhaId
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
