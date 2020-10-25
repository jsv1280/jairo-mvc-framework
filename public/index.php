<?php

require_once __DIR__.'/../vendor/autoload.php';

use jairo\controllers\SiteController;
use jairo\core\JairoFramework;

$jairo = new JairoFramework(dirname(__DIR__));

$jairo->router->get('/',[SiteController::class,'home']);
$jairo->router->get('/contact',[SiteController::class,'contact']);
$jairo->router->post('/contact',[SiteController::class,'handleContact']);

$jairo->router->get('/login',[AuthController::class,'login']);
$jairo->router->post('/login',[AuthController::class,'login']);
$jairo->router->get('/register',[AuthController::class,'register']);
$jairo->router->post('/register',[AuthController::class,'register']);

$jairo->start();

?>