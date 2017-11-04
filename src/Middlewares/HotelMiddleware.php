<?php
namespace Middlewares;

use Utils\Middleware;
use Exception\ApiException;
use Database\HotelDB;

/**
*  @author - Diefferson Santos
**/
class HotelMiddleware extends Middleware
{ 
    public function __invoke($request,$response, $next)
    {

    	$this->validateHotel($request);

        $response = $next($request, $response);
        
        return $response;
    }

    private function validateHotel($request){

        $codeHotel = $request->getAttribute('routeInfo')[2]['code_hotel'];

        if($request->getParsedBody()['code_hotel']){
            $codeHotel = $request->getParsedBody()['code_hotel'];
        }


        $hotelDB = new HotelDB($this);

        $hotel = $hotelDB->searchHotel($codeHotel);

        if(!$hotel){
            throw new ApiException("Hotel não encontrado", 400);
        }
    }
}