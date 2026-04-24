<?php
require_once "Router.php";

class App {
    protected $controller = "ProductController";
    protected $action = "index";
    protected $params = [];

    public function __construct() {
        $url = Router::parseUrl() ?: [];

        // 1. Xử lý Controller
        if (isset($url[0])) {
            $controllerName = ucfirst($url[0]) . 'Controller';
            if (file_exists(__DIR__ . "/../app/controllers/" . $controllerName . ".php")) {
                $this->controller = $controllerName;
                array_shift($url);
            }
        }

        require_once __DIR__ . "/../core/Controller.php";
        require_once __DIR__ . "/../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // 2. Xử lý Action
        if (isset($url[0]) && method_exists($this->controller, $url[0])) {
            $this->action = $url[0];
            array_shift($url);
        }

        // 3. Xử lý Params
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);
    }
}