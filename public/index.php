<?php

require_once __DIR__.'/../vendor/autoload.php';
use jairo\core\JairoFramework;

$jairo = new JairoFramework(dirname(__DIR__));

$jairo->router->get('/','home');
$jairo->router->get('/contact','contact');

$jairo->start();

?>