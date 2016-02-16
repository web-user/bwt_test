<?php
defined('MVCproject') or die('Access denied');
session_start();

// include model 
require_once MODEL;

// obtain a dynamic part of the pattern
$view = empty($_GET['view']) ? 'reg' : $_GET['view'];


// // include views
require_once TEMPLATE.'index.php';