<?php 
defined('MVCproject') or die('Access denied');

//print array 
function print_arr($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

// redirect
function redirect($http = false){
	if($http) $redirect = $http;
	else $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    header("Location: $redirect");
    exit;
}

//cleaning of incoming data
function clear($var){
	$var = mysql_real_escape_string(strip_tags(trim($var)));
	return $var;
}

// exit user
function logout(){
	unset($_SESSION['auth']);
}
