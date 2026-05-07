<?php
require_once "Router.php";

class App {
    protected $controller = "ProductController";
    protected $action = "index";
    protected $params = [];
    //Nếu user không nhập gì thì mặc định sẽ gọi ProductController và action index
    public function __construct() {
        $url = Router::parseUrl() ?: [];//Phân tích URL để lấy controller, action và params (Do Router làm việc này nên App không cần quan tâm đến cách phân tích URL như thế nào)

        // 1. Xử lý Controller => Gọi ProductController.php
        if (isset($url[0])) {
            $controllerName = ucfirst($url[0]) . 'Controller'; //Kiểm tra Controller có tồn tại không?
            if (file_exists(__DIR__ . "/../app/controllers/" . $controllerName . ".php")) {
                $this->controller = $controllerName;
                array_shift($url);//Xóa phần controller đã xử lý khỏi mảng URL để phần còn lại là action và params
            }
        }

        require_once __DIR__ . "/../core/Controller.php";
        require_once __DIR__ . "/../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller; //Tạo objet Controller để chạy action

        // 2. Xử lý Action
        if (isset($url[0]) && method_exists($this->controller, $url[0])) {
            $this->action = $url[0];
            array_shift($url);
        }

        // 3. Xử lý Params
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);//Gọi controller: ProductsController->index(2) nếu URL là /products/index/2
    }
}