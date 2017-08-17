<?php
namespace Controllers;

use Utils\Controller;
use Domain\Hotel;
use Database\HotelDB;
use Utils\ResponseApi;
use Utils\OutputMessages as Out;

/**
 * @author - Diefferson Santos
*/
class HotelController extends Controller{

	public function listaHoteis($request, $response, $args){

		$db = new HotelDB($this);

		$hoteis = $db->listaHoteis();

		$responseApi = new ResponseApi(Out:: C_CONSULTA_SUCESSO, Out::M_CONSULTA_SUCESSO,  $hoteis);

        $response = $response->write( $responseApi->getResponse() );

        return $response;  
	}
}