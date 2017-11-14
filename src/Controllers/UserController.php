<?php
namespace Controllers;

use Utils\Controller;
use Domain\User;
use Database\UserDB;
use Exception\ApiException;
use Utils\ResponseApi;

/**
 * @author - Diefferson Santos
*/
class UserController extends Controller{

	public function signUp($request, $response, $args){

		$user = User::doUser($request->getParsedBody());

		$this->validateEmailUser($user->getEmail());

		$password = sha1($request->getParsedBody()['password']);

		$db = new UserDB($this);

		if(!$db->signUp($user, $password)){
			throw new Exception("Erro ao salvar usuário", 400);
		}

		$responseApi = new ResponseApi(null,"Sucess");

		$response = $response->write( $responseApi->getResponse() );

        return $response;  
	}


	public function getUser($request, $response, $args){

		$emailUser = $request->getAttribute('email_user');

		$db = new UserDB($this);

		$user = $db->searchUserEmail($emailUser);

		if(!$user){
			throw new ApiException("Usuário não encontrado", 400);
		}

		$responseApi = new ResponseApi( $user);

        $response = $response->write( $responseApi->getResponse());

        return $response;  

	}

	public function updateUser($request, $response, $args){

		$user = User::doUser($request->getParsedBody());

		$db = new UserDB($this);

		if (!$db->updateUser($user)) {
			throw new Exception("Erro ao salvar usuário", 400);
		}

		$user = $db->searchUserEmail($postUser->getEmail());

		$responseApi = new ResponseApi($user);

        $response = $response->write( $responseApi->getResponse());

        return $response;  

	}

	public function patchUser($request, $response, $args){

		$db = new UserDB($this);

		$postUser = User::doUser($request->getParsedBody());

		$user = $db->searchUserEmail($postUser->getEmail());

		if($postUser->getName()){
			$user->setName($postUser->getName());
		}

		if($postUser->getAddress()){
			$user->setAddress($postUser->getAddress());
		}


		if($postUser->getPhone()){
			$user->setPhone($postUser->getPhone());
		}

		if($postUser->getCity()){
			$user->setCity($postUser->getCity());
		}

		if($postUser->getUf()){
			$user->setUf($postUser->getUf());
		}

		if($postUser->getAvatar()){
			$user->setAvatar($postUser->getAvatar());
		}

		if (!$db->updateUser($user)) {
			throw new Exception("Erro ao salvar usuário", 400);
		}

		$user = $db->searchUserEmail($postUser->getEmail());

		$responseApi = new ResponseApi($user);

        $response = $response->write( $responseApi->getResponse());

        return $response;  
	}

	public function deleteUser($request, $response, $args){

		echo "deleteUser";

	}

	private function validateEmailUser($email){

		$db = new UserDB($this);
		$user = $db->searchUserEmail($email);

		if($user){
			throw new ApiException("E-mail já cadastrado", 409);
		}
	}
}