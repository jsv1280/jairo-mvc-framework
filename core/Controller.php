<?php

namespace jairo\core;

use jairo\core\JairoFramework;

class Controller {

    public function render($view,$params = []){

        return JairoFramework::$jairo->router->renderView($view,$params);

    }
}

?>