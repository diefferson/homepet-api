<?php
namespace Database;

use Utils\DefaultDB;
use Domain\Rating;
use Domain\Coordinate;
/**
 * @author - Diefferson Santos
*/
class RatingDB extends DefaultDB{

	public function saveRating(Rating $rating){

		$this->getConnection();

		$insertStatement = $this->pdo->insert(
									array(
										'code_hotel',
										'code_user',
										'rating',
										'date'
									)
								)
                       			->into("tb_rating_hotel")
                      	 		->values(
                      	 			array(
                      	 				$rating->getCodeHotel(),
                      	 				$rating->getCodeUser(),
                      	 				$rating->getRating(),
                      	 				date('Y-m-d')
                      	 				
									)
								);
        try{
         	$insertStatement->execute(false);
         	return true;
        }catch(\Exception $e){
        	$this->container->logger->warning("Error saving rating", [$e->getMessage()]);
        	return false;
        }finally{
        	$this->closeConection();
        }
	}
}