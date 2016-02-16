<?php
defined('MVCproject') or die('Access denied');
session_start();

// include model 
require_once MODEL;

// connection library functions
require_once 'functions/functions.php';

// registration
if( $_POST['reg'] ){
	registration();
	exit;
}

// feedback
if( $_POST['feedback'] ){
	feedback();
	exit;
}


// authorization
if($_POST['auth']){
    authorization();
    if($_SESSION['auth']['user']){
        // If a user is logged
        echo "<p>Welcome, {$_SESSION['auth']['user']}</p>";
        exit;
    }else{
        // if authorization fails
        echo $_SESSION['auth']['error'];
        unset($_SESSION['auth']);
        exit;
    }
}

// exit user
if( $_GET['do'] == 'logout' ){
	logout();
	redirect();
}

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