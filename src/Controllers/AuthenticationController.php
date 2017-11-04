<?php
namespace Controllers;

use Utils\Controller;
use Utils\JWTWrapper;
use Utils\ResponseApi;
use Exception\ApiException;
use OAuth2 as OAuth2;


/**
 * @author - Diefferson Santos
*/
class AuthenticationController extends Controller{

	public function atutenticate($request, $response, $args){

		$server = new OAuth2\Server($this->storage, array(
		    'use_jwt_access_tokens' => true,        
		));

		$server->addGrantType(new OAuth2\GrantType\UserCredentials($this->storage));
		$server->addGrantType(new OAuth2\GrantType\RefreshToken($this->storage, array(
								    'always_issue_new_refresh_token' => true
								)));

		$auth = $server->handleTokenRequest(OAuth2\Request::createFromGlobals(), new OAuth2\Response());

		if($auth->getStatusCode() != 200){
			$message = $auth->getStatusText();
			if($auth->getParameters()['error_description']){
                $message = $auth->getParameters()['error_description'];
            }
            throw new ApiException($message, $auth->getStatusCode());
		}

		$responseApi = new ResponseApi($auth->getParameters());

        $response = $response->write( $responseApi->getResponse() );

        return $response;  
	}
}