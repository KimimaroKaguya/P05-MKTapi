<?php
	error_reporting(0);
	# configuration for database
	$_config['database']['hostname'] = "localhost";
	$_config['database']['username'] = "wifiman";
	$_config['database']['password'] = "wifiman000";
	$_config['database']['database'] = "dtmt";
	
	# connect the database server
	$link = new mysqldb();
	$link->connect($_config['database']);
	$link->selectdb($_config['database']['database']);
	$link->query("SET NAMES 'utf8'");
	date_default_timezone_set('Asia/Bangkok');
	
	@session_start();
?>
