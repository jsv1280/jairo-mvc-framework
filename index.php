<?php

require_once __DIR__.'/vendor/autoload.php';
use jairo\core\JairoFramework;

$jairo = new JairoFramework();

$jairo->router->get('/',function(){
    return 'Hello World';
});


$jairo->start();

?>