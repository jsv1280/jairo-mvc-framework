<?php

namespace jairo\controllers;

use jairo\core\JairoFramework;

class SiteController{

    public function home(){

        $params = [
            "name" => "Jairo"
        ];

        return JairoFramework::$jairo->router->renderView('home',$params);
    }

    public function contact(){
        return JairoFramework::$jairo->router->renderView('contact');
    }

    public function handleContact(){
        return 'Handling submiting data';
    }
}


?>