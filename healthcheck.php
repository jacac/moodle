<?php
header('Content-Type: text/plain');
echo time().PHP_EOL;

if(!isset($_GET['db']) || $_GET['db'] != 'no') {

	include_once 'config.php';
	/* @var $DB moodle_database */
	global $DB;
	echo 'Database Connection: Success';

}
