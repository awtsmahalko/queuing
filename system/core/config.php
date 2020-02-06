<?php 
error_reporting(0);
// GLOBALS DATABASE CONFIG AND OTHERS
	$GLOBALS['config'] = array(
		'mysql' => array(
			'host'         => 'mysql.hostinger.com',
			'username'     => 'u764488932_que',
			'password'     => 'que12345',
			'database'	   => 'u764488932_que'
		),

		'footer' => array(
			'description' => '<strong>Copyright &copy; '.date("Y").' <a href="http://www.wdysolutions.com/main/">WDysolutions&trade;</a>.</strong> All rights reserved.'
		)
	);

// CLASSES AND FUNCTIONS (inside directory)
	define ("VALUE",serialize (array ("my_functions.php")));
	date_default_timezone_set("Asia/Manila");
	$today = date('H:i:s');
	$date_time = date('Y-m-d H:i:s');
	$date = date('Y-m-d');

// START THE SESSION
	session_start();


// CONNECT TO DATABASE SERVER
	$database = $GLOBALS['config']['mysql']['database'];
	$host 	  = $GLOBALS['config']['mysql']['host'];
	$username = $GLOBALS['config']['mysql']['username'];
	$password = $GLOBALS['config']['mysql']['password'];

	@mysql_connect($host, $username, $password) or die("Cannot connect to MySQL Server");
	@mysql_select_db($database) or die ("Cannot connect to Database");
	@mysql_query("SET SESSION sql_mode=''");


// INCLUDE ALL FUNCTIONS
	foreach(unserialize(VALUE) as $val){
		if(!empty($val)){
			include  __DIR__ .'/'.$val;
		}
	}
