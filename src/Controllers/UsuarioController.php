<?php
namespace Controllers;

use Utils\Controller;

/**
 * @author - Diefferson Santos
*/
class UsuarioController extends Controller{

	public function index($request, $response, $args){

   		$this->view->render($response, 'home.twig');

   		return $response;
	}
}