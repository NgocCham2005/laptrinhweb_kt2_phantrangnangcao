<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// load Paginator
require_once __DIR__ . '/../app/utils/Paginator.php';

// tổng số bản ghi giả
$total = 53;

// lấy page từ URL
$page = $_GET['page'] ?? 1;

// tạo paginator
$paginator = new Paginator($total, 5, $page);

// fake data giống DB
$data = [];
$start = $paginator->getOffset();
$end = min($start + $paginator->getLimit(), $total);

for ($i = $start + 1; $i <= $end; $i++) {
    $data[] = "Product $i";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Pagination</title>
</head>
<body>

<h2>Danh sách sản phẩm</h2>

<ul>
    <?php foreach ($data as $item): ?>
        <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>

<hr>

<div>
    <!-- Prev -->
    <?php if ($paginator->hasPrev()): ?>
        <a href="?page=<?= $paginator->getPrevPage() ?>">Prev</a>
    <?php endif; ?>

    <!-- Page numbers -->
    <?php for ($i = 1; $i <= $paginator->getTotalPages(); $i++): ?>
        <a href="?page=<?= $i ?>"
           style="<?= $i == $paginator->getCurrentPage() ? 'font-weight:bold' : '' ?>">
           <?= $i ?>
        </a>
    <?php endfor; ?>

    <!-- Next -->
    <?php if ($paginator->hasNext()): ?>
        <a href="?page=<?= $paginator->getNextPage() ?>">Next</a>
    <?php endif; ?>
</div>

</body>
</html>