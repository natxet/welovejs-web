<?php

$assets_path = '/welovejs-web/';
$base_path = '/welovejs-web/';

$page_path = str_replace( $base_path, '', filter_input( INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_SPECIAL_CHARS ) );
$pages = array(
	'home' => 'Home',
	'next' => 'Próximo evento',
	'venue' => 'Lugar',
	'about' => 'Nosotros',
);
$page = $page_path ? $page_path : 'home';
$page_filename = "templates/$page.php";

$events = array(
	'2012-spring' => '2012 primavera',
);
$next_event_url = $base_path . array_pop( array_keys( $events ));


require 'templates/main.php';