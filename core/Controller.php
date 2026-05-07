<?php //render view, load file giao diện nào, AJAX render kiểu gì
abstract class Controller {//Không tạo object trực tiếp của Controller, chỉ tạo object của các class con kế thừa Controller
protected function view(string $view, array $data = [], bool $withLayout = true): void { //Hàm render view để load file view, truyền dữ liệu, load layout
        extract($data);//Biến array thành php, view không nhận object trực tiếp, chỉ nhận biến được extract từ array
        
        $viewFile = __DIR__ . "/../app/views/" . $view . ".php";
        $layoutFile = __DIR__ . "/../app/views/layouts/main.php";
        
        if (file_exists($viewFile)) {
            if ($withLayout) {
                // Load toàn bộ trang (Có Header, Main, Footer)
                ob_start(); //Tạm giữ HTML trong buffer, chưa xuất ra trình duyệt
                require_once $viewFile; //Chạy file view: app/views/product/index.php
                $content = ob_get_clean(); //Lấy toàn bộ HTML trong buffer lưu vào $content, xóa buffer
                
                if (file_exists($layoutFile)) {
                    require_once $layoutFile;
                } else {
                    die("Không tìm thấy Layout tại: " . $layoutFile);
                }
            } else {
                // Dùng khi Ajax gọi danh sách sản phẩm _list.php
                require_once $viewFile;
            }
        } 
        else {
            die("Không tìm thấy View tại: " . realpath($viewFile) . " (Đường dẫn gốc: " . $viewFile . ")");
        }
    }
}
