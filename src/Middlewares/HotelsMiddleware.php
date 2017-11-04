<?php
namespace Middlewares;

use Utils\Middleware;
use Exception\ApiException;
use Database\HotelDB;

/**
*  @author - Diefferson Santos
**/
class HotelsMiddleware extends Middleware
{ 
    public function __invoke($request,$response, $next)
    {

    	$request = $this->validate($request);

        $response = $next($request, $response);
        
        return $response;
    }

    private function validate($request){

        $sort = $request->getParam('sort');
        $sense = $request->getParam('sense');

        $request = $request->withAttribute("sort",$this->validateSort($sort));
        $request = $request->withAttribute("sense",$this->validateSense($sense));
  
        return $request;
    }

    private function validateSort($sort){

        $sorts = array("price", "rating", "comments");

    	if(in_array(strtolower($sort), $sorts)){
    		return strtolower($sort);
    	}else{
    		return "price";
    	}
    }

    private function validateSense($sense){

        $senses = array("DESC", "ASC");

    	if(in_array(strtoupper($sense), $senses)){
    		return strtoupper($sense);
    	}else{
    		return "ASC";
    	}
    }
}