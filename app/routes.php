<?php

$app->get(URL_BASE."/", 'HomeController:index')->setName('homepage');

$app->get(URL_BASE.'/hotel', 'HotelController:listaHoteis')->setName('listaHoteis');