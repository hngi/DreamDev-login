<?php 
	
	// connect to database
	// $db = mysqli_connect('localhost', 'root', '', 'dreamdev');
	
	$active_group = 'default';
	$query_builder = TRUE;
	
	$db['default'] = array(
		'dsn'    => '',
		'hostname' => 'us-cdbr-iron-east-02.cleardb.net',
		'username' => 'b916489ac9ce85',
		'password' => 'c55e02df',
		'database' => 'heroku_6a8f30a1d0f6b34',
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);
?>
