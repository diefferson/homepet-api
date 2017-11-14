<?php
namespace Database;

use Utils\DefaultDB;
use Domain\Hotel;
use Domain\Service;
use Domain\Coordinate;
/**
 * @author - Diefferson Santos
*/
class HotelDB extends DefaultDB{

	public function getHotels($sort, $sense){

		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select()
		                       		  ->from("list_hotels_view")
		                       		  ->orderBy($sort , $sense);



		$stmt = $selectStatement->execute();


		$data = $stmt->fetchAll();



        $this->closeConection();

        $hotels = array();

        foreach ($data as $key => $value) {
        	$hotels[] = Hotel::doHotel($value);
        }
        
		return $hotels;
	}

	public function searchHotel($code){

		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select()
		                       		  ->from("tb_hotel")
		                       		  ->where("code_hotel", "=", $code);

		$stmt = $selectStatement->execute();
		$data = $stmt->fetch();

        $this->closeConection();

        $hotel = null;
        if($data){
        	$hotel = Hotel::doHotel($data);
        }

		return $hotel;
	}

	public function getHotelResume(Hotel $hotel){

		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select(array("rating", "ratings", "comments"))
		                       		  ->from("list_hotels_view")
		                       		  ->where("code_hotel", "=", $hotel->getCode());

		$stmt = $selectStatement->execute();
		$data = $stmt->fetch();

        $this->closeConection();

        if($data['rating']){
			$hotel->setRating($data['rating']);
		}

		if($data['ratings']){
			$hotel->setRatingsNumber($data['ratings']);
		}

		if($data['comments']){
			$hotel->setCommentsNumber($data['comments']);
		}

		return $hotel;
	}

	public function getHotelImages(Hotel $hotel){

		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select(array("url"))
		                       		  ->from("tb_image_hotel")
		                       		  ->where("code_hotel", "=", $hotel->getCode());

		$stmt = $selectStatement->execute();
		$data = $stmt->fetchAll();

        $this->closeConection();

        $images = array();
        foreach($data as $value){
        	$images[] = $value['url'];
        }

        $hotel->setImages($images);

		return $hotel;
	}

	public function getHotelServices($hotel){

		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select(array('tb_service.code_service', 'tb_service.name'))
		                       		  ->from("tb_service_hotel")
		                       		  ->join('tb_service', 'tb_service_hotel.code_service', '=', 'tb_service.code_service')
		                       		  ->where("tb_service_hotel.code_hotel", "=", $hotel->getCode());

		$stmt = $selectStatement->execute();
		$date = $stmt->fetchAll();

        $this->closeConection();

        $services = array();

        foreach ($date as $key => $value) {
        	$services[] = Service::doService($value);
        }

        $hotel->setServices($services);
        
		return $hotel;
	}

	public function getCoordinates($codeHotel){
		
		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select(array("latitude", "longitude"))
		                       		  ->from("tb_hotel")
		                       		  ->where("code_hotel", "=", $codeHotel);

		$stmt = $selectStatement->execute();
		$data = $stmt->fetch();

        $this->closeConection();

        $coordinate = new Coordinate($data["latitude"], $data["longitude"]);

		return $coordinate;
	}
}