<?php
$sites = array(
	'welovejs' => 'welovejs.es',
	'welovephp' => 'welovephp.es',
);
// by default, the first site
$site = array_shift( array_keys( $sites ) );
foreach( $sites as $tmp_site => $tmp_hostname )
	if( preg_match( '|'.$tmp_hostname.'$|', $_SERVER['HTTP_HOST'] ) )
		$site = $tmp_site;
$config_common = require( 'config/common.php' );
$config = require( "config/$site.php" );

$assets_path = $base_path = preg_replace( '|index.php$|', '', $_SERVER['SCRIPT_NAME'] );
$page_path = str_replace( $base_path, '', filter_input( INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_SPECIAL_CHARS ) );

$pages = $config_common['pages'];
$page = $page_path ? $page_path : 'home';
$page_filename = "templates/$page.php";

$next_events 	 = $config['next_events'];
$past_events 	 = $config['past_events'];
$next_event_url  = array_shift( array_keys( $next_events ));
$next_event_name = array_shift( array_values( $next_events ));

require 'templates/main.php';