<?php

/*
	Configuration: just put here the filename in which the hash will be stored
	It must be non readable from the public folder!
*/
$token_filename = '.gittoken';

if(!isset($_GET['token']) || !$_GET['token']) die('No token');
if(!file_exists($token_filename)) file_put_contents($token_filename, $_GET['token']);
$token = trim(file_get_contents($token_filename));
if($_GET['token'] != $token) die('Incorrect token. Delete $token_filename file for storing a new token');

// todo: estas son las ips de github 207.97.227.253, 50.57.128.197, 108.171.174.178

/**
 * based on https://gist.github.com/1809044
 */

// The commands
$commands = array(
	'echo $PWD',
	'whoami',
	'git pull',
	'git status',
	'git submodule sync',
	'git submodule update',
	'git submodule status',
);

// Run the commands for output
$output = '';
foreach($commands AS $command){
	// Run it
	$tmp = shell_exec($command . " 2>&1");
	// Output
	$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
	$output .= htmlentities(trim($tmp)) . "\n";
}

// Make it pretty for manual user access (and why not?)
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
 .  ____  .    ____________________________
 |/      \|   |                            |
[| <span style="color: #FF0000;">&hearts;   &hearts;</span> |]  | Git Deployment Script v0.1 |
 |___==___|  /              &copy; oodavid 2012 |
              |____________________________|

<?php echo $output; ?>
</pre>
</body>
</html>

<?php
$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
mail( 'icofre@gmail.com', 'buscacoles.com deployed'
	, "IP: $ip\n" . var_export($_POST, true) . "\n\n" . $output );
