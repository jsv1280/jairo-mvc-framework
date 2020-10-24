<?php
namespace jairo\core;

class JairoFramework 
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static JairoFramework $jairo;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$jairo = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request,$this->response);   
        
    }

    public function start(){
        echo $this->router->resolve();
    }

}

?>