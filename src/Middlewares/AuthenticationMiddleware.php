<?php
namespace Middlewares;

use Utils\Middleware;
use Utils\JWTWrapper;
use Exception\ApiException;
use OAuth2 as OAuth2;
use Database\UserDB;

/**
*  @author - Diefferson Santos
**/
class AuthenticationMiddleware extends Middleware
{ 
    public function __invoke($request,$response, $next){

    	$request = $this->autenticate($request);
    	
        $response = $next($request, $response);
        
        return $response;
    }

    private function autenticate($request){

        $keys = $this->settings['OAuth'];

        $storage =  new OAuth2\Storage\Memory(
            array('keys' => array('public_key'  => $keys['public_key'])
        ));

        $server = new OAuth2\Server($this->storage, array(
            'use_jwt_access_tokens' => true
        ));

        if(!$server->verifyResourceRequest(OAuth2\Request::createFromGlobals(), new OAuth2\Response())){
            $auth =  $server->getResponse();
            $message = $auth->getStatusText();
            if($auth->getParameters()['error_description']){
                $message = $auth->getParameters()['error_description'];
            }
            throw new ApiException($message, $auth->getStatusCode());   
        }

        $request = $request->withAttribute("email_user" , $server->getResourceController()->getToken()['user_id']);

        return $this->setUserCode($request);
    }

    private function setUserCode($request){
        $userDB = new UserDB($this);
        $user = $userDB->searchUserEmail($request->getAttribute('email_user'));
        $data = $request->getParsedBody();
        $data['code_user'] = $user->getCode();
        $request = $request->withParsedBody($data); 
        return $request;
    }
}