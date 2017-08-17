<?php
namespace Controllers;

use Utils\Controller;

/**
 * @author - Diefferson Santos
*/
class ServicoController extends Controller{

	public function index($request, $response, $args){

   		$this->view->render($response, 'home.twig');

   		return $response;
	}
}