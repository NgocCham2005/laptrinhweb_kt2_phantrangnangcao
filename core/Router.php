<?php
class Router {
    public static function parseUrl(): array {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode("/", $url);
        }
        return []; // Trả về mảng rỗng nếu ở trang chủ
    }
}