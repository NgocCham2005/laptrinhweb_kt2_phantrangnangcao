<?php
session_start();// Bắt đầu session để quản lý trạng thái người dùng

// 1. Gọi file cấu hình
require_once __DIR__ . "/../config/config.php";
// 2. Gọi các thành phần cốt lõi (Core)
require_once __DIR__ . "/../core/App.php";
require_once __DIR__ . "/../core/Controller.php";
require_once __DIR__ . "/../core/Database.php";
// 3. Khởi chạy toàn bộ hệ thống
$myApp = new App(); //App sẽ tự động phân tích URL và gọi Controller tương ứng