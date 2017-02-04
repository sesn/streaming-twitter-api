<?php
/**
* db_config.php
* MySQL connection parameters for 140dev Twitter database server
* Fill in these values for your database
* Latest copy of this code: http://140dev.com/free-twitter-api-source-code-library/
* @author Adam Green <140dev@gmail.com>
* @license GNU Public License
* @version BETA 0.30
*/
  ini_set('display_errors','1');
  error_reporting('E_ALL');
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_name = '140_streaming_api'; 
	
	// MySQL time zone setting to normalize dates
	define('TIME_ZONE','Asia/Kolkata');
?> 