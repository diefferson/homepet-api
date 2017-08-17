<?php

$container['HomeController']  = function($container) use ($app){
	return new Controllers\HomeController($container);
};

$container['AvaliacaoController']  = function($container) use ($app){
	return new Controllers\AvaliacaoController($container);
};

$container['ComentarioController']  = function($container) use ($app){
	return new Controllers\ComentarioController($container);
};

$container['HotelController']  = function($container) use ($app){
	return new Controllers\HotelController($container);
};

$container['ServicoController']  = function($container) use ($app){
	return new Controllers\ServicoController($container);
};

$container['UsuarioController']  = function($container) use ($app){
	return new Controllers\UsuarioController($container);
};