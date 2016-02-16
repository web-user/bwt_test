<?php
defined('MVCproject') or die('Access denied');

// domain
define('PATH', 'http://bwt_test.loc/');

// model
define('MODEL', 'model/model.php');

// controller
define('CONTROLLER', 'controller/controller.php');

// views
define('VIEW', 'views/');

// active template
define('TEMPLATE', VIEW.'project/');

// folder images product
define('PRODUCTIMG', PATH.'userfiles');

// server 
define('HOST', 'localhost');

// user
define('USER', 'root');

// pass
define('PASS', '');

// DB
define('DB', 'mvc_project');

// название магазина - title
define('TITLE', 'MVCproject');

// email administration
define('ADMIN_EMAIL', 'admin@project.ua');

// administration folder template
define('ADMIN_TEMPLATE', 'templates/');

@mysql_connect(HOST, USER, PASS) or die('No connect to Server');
mysql_select_db(DB) or die('No connect to DB');
mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');