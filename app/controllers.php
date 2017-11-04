<?php

$container['AuthenticationController']  = function($container) use ($app){
	return new Controllers\AuthenticationController($container);
};

$container['HotelController']  = function($container) use ($app){
	return new Controllers\HotelController($container);
};

$container['UserController']  = function($container) use ($app){
	return new Controllers\UserController($container);
};