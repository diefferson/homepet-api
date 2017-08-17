<?php
namespace Controllers;

use Utils\Controller;

/**
 * @author - Diefferson Santos
*/
class AvaliacaoController extends Controller{

	public function index($request, $response, $args){

   		$this->view->render($response, 'home.twig');

   		return $response;
	}
}