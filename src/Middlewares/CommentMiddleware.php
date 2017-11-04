<?php
namespace Middlewares;

use Utils\Middleware;
use Exception\ApiException;
use Database\HotelDB;

/**
*  @author - Diefferson Santos
**/
class CommentMiddleware extends Middleware
{ 
    public function __invoke($request,$response, $next)
    {
    	
    	$this->validateInput($request->getParsedBody());

        $response = $next($request, $response);
        
        return $response;
    }

    private function validateInput($input){

        if(!$input['code_hotel'])
        	throw new ApiException("code_hotel não informado", 400);
 
        if(!$input['comment'])
            throw new ApiException("comment não informado", 400);  
        
        $this->validateHotel($input['code_hotel']);
        
        return true;
    }

    private function validateHotel($codeHotel){

        $hotelDB = new HotelDB($this);

        $hotel = $hotelDB->searchHotel($codeHotel);

        if(!$hotel){
            throw new ApiException("Hotel não encontrado", 400);
        }
        
    }
}