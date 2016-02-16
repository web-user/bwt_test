<?php
defined('MVCproject') or die('Access denied');
session_start();

// include model 
require_once MODEL;

// connection library functions
require_once 'functions/functions.php';

// obtain a dynamic part of the pattern
$view = empty($_GET['view']) ? 'reg' : $_GET['view'];

switch ($view) {

	case('reg'):
		// registration
	break;
	case('weather'):
		// weather
	break;
	case('feedback'):
		// feedback
	break;

}


// // include views
require_once TEMPLATE.'index.php';