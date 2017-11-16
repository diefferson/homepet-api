<?php

/**
 * @SWG\Info(title="My First API", version="0.1")
 */

/**
 * @SWG\Get(
 *     path="/api/resource.json",
 *     @SWG\Response(response="200", description="An example resource")
 * )
 */
$app->get(URL_BASE."/", function($request, $response, $args){
	echo "Hello World";
});

$app->post(URL_BASE.'/signup', 'UserController:signUp')
	->setName('userRegister')
	->add('SignUpMiddleware')
	->add('JsonOutputMiddleware');

$app->post(URL_BASE."/auth", 'AuthenticationController:atutenticate')
	->setName('atutenticate')
	->add('JsonOutputMiddleware');

$app->get(URL_BASE.'/hotel', 'HotelController:getHotels')
	->setName('getHotels')
	->add('HotelsMiddleware')
	->add('JsonOutputMiddleware');

$app->get(URL_BASE.'/hotel/{code_hotel}', 'HotelController:getHotel')
	->setName('getHotel')
	->add('HotelMiddleware')
	->add('JsonOutputMiddleware');

$app->get(URL_BASE.'/comment/{code_hotel}', 'HotelController:getComments')
	->setName('getComments')
	->add('HotelMiddleware') 
	->add('JsonOutputMiddleware');


$app->get(URL_BASE.'/coordinates/{code_hotel}', 'HotelController:getCoordinates')
	->setName('getCoordinates')
	->add('HotelMiddleware')
	->add('JsonOutputMiddleware');

$app->post(URL_BASE.'/comment', 'HotelController:incudeComment')
	->setName('incudeComment')
	->add('AuthenticationMiddleware')
	->add('CommentMiddleware')
	->add('HotelMiddleware')
	->add('JsonOutputMiddleware');

$app->post(URL_BASE.'/rating', 'HotelController:incudeRating')
	->setName('incudeRating')
	->add('AuthenticationMiddleware')
	->add('RatingMiddleware')
	->add('HotelMiddleware')
	->add('JsonOutputMiddleware');

$app->get(URL_BASE.'/user', 'UserController:getUser')
	->setName('getUser')
	->add('AuthenticationMiddleware')
	->add('JsonOutputMiddleware');

$app->post(URL_BASE.'/user', 'UserController:updateUser')
	->setName('updateUser')
	->add('AuthenticationMiddleware')
	->add('UserMiddleware')
	->add('JsonOutputMiddleware');

$app->patch(URL_BASE.'/user', 'UserController:patchUser')
	->setName('patchUser')
	->add('AuthenticationMiddleware')
	->add('JsonOutputMiddleware');
