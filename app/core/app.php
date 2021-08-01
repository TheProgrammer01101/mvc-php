<?php 

Class App {
    private $controller = "home";
    private $method = "index";
    private $params = [];

    public function __construct() {
        $url = $this->splitURL();

        if(file_exists("../app/controllers/".strtolower($url[0]).".php")) {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }

        require "../app/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;

        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        show($url);
    }
    private function splitURL() {
        return explode("/", trim($_GET['url'],"/"));
    }
}

