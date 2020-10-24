<?php
namespace jairo\core;

class JairoFramework 
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);   
        
    }

    public function start(){
        $this->router->resolve();
    }

}

?>