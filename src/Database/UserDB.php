<?php
namespace Database;

use Utils\DefaultDB;
use Domain\User;

/**
 * @author - Diefferson Santos
*/
class UserDB extends DefaultDB{

	public function searchUserEmail($email){

		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select()
		                       		  ->from("tb_user")
		                       		  ->where("email", "=", $email);

		$stmt = $selectStatement->execute();
		$data = $stmt->fetch();

        $this->closeConection();

        $user = null;
        if($data){
        	$user = User::doUser($data);
        }

		return $user;
	}

	public function searchUserCode($code){

		$this->getConnection();
		
		$selectStatement = 	$this->pdo->select()
		                       		  ->from("tb_user")
		                       		  ->where("code_user", "=", $code);

		$stmt = $selectStatement->execute();
		$data = $stmt->fetch();

        $this->closeConection();

        $user = null;
        if($data){
        	$user = User::doUser($data);
        }

		return $user;
	}

	public function signUp(User $user, $password){

		$this->getConnection();

		$insertStatement = $this->pdo->insert(
									array(
										'name',
										'email',
									)
								)
                       			->into("tb_user")
                      	 		->values(
                      	 			array(
                      	 				$user->getName(),
                      	 				$user->getEmail(),
									)
								);
        try{
         	$this->saveOAuthUser($user->getEmail(), $password);
         	$insertStatement->execute(false);
         	return true;
        }catch(\Exception $e){
        	$this->container->logger->warning("Error saving user", [$e->getMessage()]);
        	return false;
        }finally{
        	$this->closeConection();
        }
	}

	private function saveOAuthUser($username, $password){

		$this->getConnection();

		$insertStatement = $this->pdo->insert(
									array(
										'username',
										'password',
									)
								)
                       			->into("oauth_users")
                      	 		->values(
                      	 			array(
                      	 				$username,
                      	 				$password,
									)
								);
        
     	$insertStatement->execute(false);

    	$this->closeConection();
        
	}
}