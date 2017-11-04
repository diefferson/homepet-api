<?php

$container['AuthenticationMiddleware']  = function($container) use ($app){
	return new Middlewares\AuthenticationMiddleware($container);
};

$container['SignUpMiddleware']  = function($container) use ($app){
	return new Middlewares\SignUpMiddleware($container);
};

$container['JsonOutputMiddleware']  = function($container) use ($app){
	return new Middlewares\JsonOutputMiddleware($container);
};

$container['CommentMiddleware']  = function($container) use ($app){
	return new Middlewares\CommentMiddleware($container);
};

$container['RatingMiddleware']  = function($container) use ($app){
	return new Middlewares\RatingMiddleware($container);
};

$container['HotelMiddleware']  = function($container) use ($app){
	return new Middlewares\HotelMiddleware($container);
};

$container['HotelsMiddleware']  = function($container) use ($app){
	return new Middlewares\HotelsMiddleware($container);
};