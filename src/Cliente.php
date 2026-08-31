<?php

namespace Brazmovel;

use Brazmovel\Core\BrazmovelController;
use Brazmovel\Exceptions\BrazmovelException;
use Exception;
use GuzzleHttp\Exception\RequestException;

class Cliente extends BrazmovelController{
    
    public function criar(array $data){        
        try{
            $response = $this->http->post('v1/customer', [
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
    
    public function enviarToken(array $data){        
        try{
            $response = $this->http->post('v1/customer/token/send', [
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
    
    public function validarToken(array $data){        
        try{
            $response = $this->http->post('v1/customer/token/validate', [
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
    
    public function listar(array $query = []){        
        try{
            $response = $this->http->get('v1/customer', [
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
    
    public function detalhesPorId($customerId){        
        try{
            $response = $this->http->get(vsprintf('v1/customer/%s', [
                $customerId
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
    
    public function detalhesPorCpf($cpf){        
        try{
            $response = $this->http->get(vsprintf('v1/customer/cpf/%s', [
                $cpf
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
