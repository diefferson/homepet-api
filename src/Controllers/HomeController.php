<?php
namespace Controllers;

use Utils\Controller;

/**
 * @author - Diefferson Santos
*/
class HomeController extends Controller{


	public function index($request, $response, $args){
		
        $https = @$request->getServerParams()['HTTP_X_HTTPS'];

   		$this->view->render($response, 'home.twig');

    //	if ($https !== 'on' ) {
       	//	$response = $response->withRedirect('https://consulta.meucartaotransporte.com.br');
   	//	}

   		return $response;
	}
}