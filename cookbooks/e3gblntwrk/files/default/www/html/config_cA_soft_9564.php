<?php

if(isset($_SESSION['seCureCon66235s2s']) && $_SESSION['seCureCon66235s2s'] == $codeDB)
{
	
	define('DB_HOST', 'localhost');
	// define('DB_HOST', '160.153.73.168:3306');   /*use this line if it is on another server*/
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'e3gblntwrk');
    define('DB_DATABASE', 'email_markting_8545');
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	if(function_exists ('date_default_timezone_set')){
		date_default_timezone_set('Asia/Calcutta');
	}
}
else{
	mysql_close();
	header("Location:../login/");
	exit(0);
}


	
?>
