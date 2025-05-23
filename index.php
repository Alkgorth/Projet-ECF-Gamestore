<?php
require_once __DIR__.'/config_const.php';

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => $_SERVER['SERVER_NAME'],
    'httponly' => true
]);
session_start();
define('_ROOTPATH_', __DIR__);
define('_TEMPLATEPATH_', __DIR__.'/templates');
spl_autoload_register();

use App\Controller\Controller;
use App\Entity\User;



$controller = new Controller;
$controller->route();

?>