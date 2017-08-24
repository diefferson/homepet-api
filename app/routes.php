<?php

$app->get(URL_BASE."/", 'HomeController:index')->setName('homepage');

$app->get(URL_BASE.'/hoteis', 'HotelController:listaHoteis')
	->setName('listaHoteis')
	->add('JsonOutputMiddleware');

