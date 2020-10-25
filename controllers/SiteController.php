<?php

namespace jairo\controllers;

use jairo\core\Controller;
use jairo\core\Request;

class SiteController extends Controller {

    public function home(){

        $params = [
            "name" => "Jairo"
        ];

        return $this->render('home',$params);
    }

    public function contact(){
        return $this->render('contact');
    }

    public function handleContact(Request $request){
        $body = $request->getBody();
    }
}


?>