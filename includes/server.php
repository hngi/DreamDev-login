<?php 
	
	// connect to database
	// $db = mysqli_connect('localhost', 'root', '', 'dreamdev');
	$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$cleardb_server   = $cleardb_url["us-cdbr-iron-east-02.cleardb.net"];
	$cleardb_username = $cleardb_url["b916489ac9ce85"];
	$cleardb_password = $cleardb_url["c55e02df"];
	$cleardb_db       = substr($cleardb_url["heroku_6a8f30a1d0f6b34"],1);
	
	
	$active_group = 'default';
	$query_builder = TRUE;
	
	$db['default'] = array(
		'dsn'    => '',
		'hostname' => $cleardb_server,
		'username' => $cleardb_username,
		'password' => $cleardb_password,
		'database' => $cleardb_db,
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
