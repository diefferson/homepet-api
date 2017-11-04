<?php
namespace Middlewares;

use Utils\Middleware;
use Exception\ApiException;

/**
*  @author - Diefferson Santos
**/
class SignUpMiddleware extends Middleware
{ 

	public function __invoke($request,$response, $next)
    {
    	
    	$this->validateInput($request->getParsedBody());

        $response = $next($request, $response);
        
        return $response;
    }

    private function validateInput($input){

        if(!$input['name'])
        	throw new ApiException("name não informado", 400);
        	
        if(!$input['email'])
            throw new ApiException("email não informado", 400);   
   
        if(!$input['password'])
            throw new ApiException("password não informado", 400);  
        
        return true;
    }

}