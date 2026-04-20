<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// load Paginator
require_once __DIR__ . '/../app/utils/Paginator.php';

// giả lập dữ liệu
$total = 45; // đổi số này để test số trang
$page = $_GET['page'] ?? 1;

// tạo paginator
$paginator = new Paginator($total, 5, $page);

// lấy dữ liệu cho view
$pagination = $paginator->toArray();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Pagination</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/ltweb/laptrinhweb_kt2_phantrangnangcao/public/css/pagination.css">
</head>
<body>

<h2>Test Pagination UI</h2>

<!-- chỉ hiển thị pagination -->
<?php require_once __DIR__ . '/../app/views/partials/pagination.php'; ?>

</body>
</html>