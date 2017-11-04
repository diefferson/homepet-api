<?php
namespace Controllers;

use Utils\Controller;
use Domain\Hotel;
use Database\HotelDB;
use Database\UserDB;
use Domain\Comment;
use Database\CommentDB;
use Domain\Rating;
use Database\RatingDB;
use Utils\ResponseApi;
use Exception\ApiException;

/**
 * @author - Diefferson Santos
*/
class HotelController extends Controller{

	public function getHotels($request, $response, $args){

		$sort =  $request->getAttribute('sort');
		$sense = $request->getAttribute('sense');

		$db = new HotelDB($this);

		$hotels = $db->getHotels($sort, $sense);

		$responseApi = new ResponseApi( $hotels);

        $response = $response->write( $responseApi->getResponse() );

        return $response;  
	}

	public function getHotel($request, $response, $args){

		$codeHotel = $request->getAttribute('code_hotel');

		$db = new HotelDB($this);

		$hotel = $db->searchHotel($codeHotel);
		$hotel = $db->getHotelResume($hotel);
		$hotel = $db->getHotelImages($hotel);
		$hotel = $db->getHotelServices($hotel);
		
		$responseApi = new ResponseApi( $hotel);

        $response = $response->write( $responseApi->getResponse());

        return $response;  
	}

	public function getComments($request, $response, $args){

		$codeHotel = $request->getAttribute('code_hotel');

		$db = new CommentDB($this);

		$comments = $db->searchComments($codeHotel);

		$userDB = new UserDB($this);
		foreach ($comments as $key => $value) {		
			$user = $userDB->searchUserCode($value->getCodeUser());
			$comments[$key]->setNameUser($user->getName());
			$comments[$key]->setAvatarUser($user->getAvatar());
		}

		$responseApi = new ResponseApi($comments);

        $response = $response->write( $responseApi->getResponse() );

        return $response;  
	}

	public function incudeComment($request, $response, $args){

		$comment = Comment::doComment($request->getParsedBody()); 

		$db = new CommentDB($this);

		if($db->saveComment($comment)){
			$responseApi = new ResponseApi(null,"Sucess");
		}else{
			throw new ApiException("Erro ao salvar commentário", 400);
		}

        $response = $response->write( $responseApi->getResponse() );

        return $response;  
	}

	public function incudeRating($request, $response, $args){

		$rating = Rating::doRating($request->getParsedBody()); 

		$db = new RatingDB($this);

		if($db->saveRating($rating)){
			$responseApi = new ResponseApi(null,"Sucess");
		}else{
			throw new ApiException("Erro ao salvar avaliação", 400);
		}

        $response = $response->write( $responseApi->getResponse() );

        return $response;  
	}

	public function getCoordinates($request, $response, $args){

		$codeHotel = $request->getAttribute('code_hotel');

		$db = new HotelDB($this);

		$coordinates = $db->getCoordinates($codeHotel);

		$responseApi = new ResponseApi($coordinates);

        $response = $response->write( $responseApi->getResponse() );

        return $response;  
	}
}