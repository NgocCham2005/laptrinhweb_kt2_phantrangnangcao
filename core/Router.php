<?php
class Router { //Đọc URL và cắt URL thành các phần để App có thể sử dụng
    public static function parseUrl(): array {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");// Loại bỏ dấu / ở cuối URL nếu có
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode("/", $url);// Cắt URL thành mảng dựa trên dấu / 
        }
        return []; // Trả về mảng rỗng nếu ở trang chủ
    }
}