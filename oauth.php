<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
define("BASE_URI","");
define('APP_NAME', 'oauth');
define('APP_PATH', dirname(__FILE__) . '/app-'.APP_NAME."/");
define('SYS_PATH', APP_PATH . "../app-system/");
$cached_files=array();
$G_LOAD_PATH = array(
    APP_PATH,
    APP_PATH."../app-common/",
    SYS_PATH
);
$G_CONF_PATH = array(
    APP_PATH."../app-common/config/",
    APP_PATH."config/",
    APP_PATH."../config/"
);
require_once(SYS_PATH . "functions.php");
require_class("Dispatcher");
Dispatcher::getInstance()->run();