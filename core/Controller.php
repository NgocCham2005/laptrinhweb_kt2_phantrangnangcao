<?php
abstract class Controller {
    protected function json($data): void {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

protected function view(string $view, array $data = [], bool $withLayout = true): void { 
        extract($data);
        
        $viewFile = __DIR__ . "/../app/views/" . $view . ".php";
        $layoutFile = __DIR__ . "/../app/views/layouts/main.php";
        
        if (file_exists($viewFile)) {
            if ($withLayout) {
                // Load toàn bộ trang (Có Header, Main, Footer)
                ob_start(); 
                require_once $viewFile;
                $content = ob_get_clean();
                
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
