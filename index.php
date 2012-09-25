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

$next_events = array(
	'2012-fall' => '3) 29 Sep 2012'
);
$past_events = array(
	'2012-spring' => '2) 28 Abr 2012',
);
$next_event_url = array_shift( array_keys( $next_events ));
$next_event_name = array_shift( array_values( $next_events ));

require 'templates/main.php';