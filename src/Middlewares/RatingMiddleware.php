<?php
namespace Middlewares;

use Utils\Middleware;
use Exception\ApiException;

/**
*  @author - Diefferson Santos
**/
class RatingMiddleware extends Middleware
{ 
    public function __invoke($request,$response, $next)
    {
    	
    	$this->validateInput($request->getParsedBody());

        $response = $next($request, $response);
        
        return $response;
    }

    private function validateInput($input){

        if(!$input['code_hotel'])
        	throw new ApiException("code_hotel não informado",400);
   
        if(!$input['rating'])
            throw new ApiException("rating não informado",400);  
        
        return true;
    }
}