<?php
$assets_path = $base_path = preg_replace('|index.php$|', '', $_SERVER['SCRIPT_NAME']);

$page_path = str_replace( $base_path, '', filter_input( INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_SPECIAL_CHARS ) );
$pages = array(
	'home' => 'Home',
	'venue' => 'Lugar',
	'about' => 'Nosotros',
);
$page = $page_path ? $page_path : 'home';
$page_filename = "templates/$page.php";

$events = array(
	'2012-fall' => '2012 otoño',
	'2012-spring' => '2012 primavera',
);
$next_event_url = $base_path . array_shift( array_keys( $events ));
$next_event_name = array_shift( array_values( $events ));

require 'templates/main.php';