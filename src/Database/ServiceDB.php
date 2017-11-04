<?php
namespace Database;

use Utils\DefaultDB;
use Domain\Service;

/**
 * @author - Diefferson Santos
*/
class ServiceDB extends DefaultDB{

	public function searchServices($codeHotel){

		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select()
		                       		  ->from("tb_service_hotel")
		                       		  ->join('tb_service', 'tb_service_hotel.code_service', '=', 'tb_service.code_service')
		                       		  ->where("tb_service_hotel.code_hotel", "=", $codeHotel);

		$stmt = $selectStatement->execute();
		$date = $stmt->fetchAll();

        $this->closeConection();

        $services = array();

        foreach ($date as $key => $value) {
        	$services[] = Service::doService($value);
        }
        
		return $services;
	}

}