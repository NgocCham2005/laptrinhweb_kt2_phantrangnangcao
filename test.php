<?php
require_once 'app/utils/Paginator.php';

// Giả lập dữ liệu
$totalRecords = 95;
$perPage = 10;
$currentPage = $_GET['page'] ?? 1;

$paginator = new Paginator($totalRecords, $perPage, $currentPage);
$pagination = $paginator->toArray();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Pagination</title>
    <style>
        body {
            font-family: Arial;
            padding: 30px;
        }

        .pagination {
            display: flex;
            gap: 6px;
            align-items: center;
        }

        .pagination a,
        .pagination span {
            padding: 6px 10px;
            border: 1px solid #ccc;
            text-decoration: none;
            color: #333;
        }

        .pagination a:hover {
            background: #eee;
        }

        .pagination .active {
            background: #007bff;
            color: white;
            border-color: #007bff;
        }

        .pagination .disabled {
            color: #aaa;
            border-color: #eee;
        }
    </style>
</head>
<body>

<h2>Pagination Test</h2>

<div class="pagination">

    <!-- Prev -->
    <?php if ($pagination['has_prev']): ?>
        <a href="?page=<?= $pagination['prev_page'] ?>">Prev</a>
    <?php else: ?>
        <span class="disabled">Prev</span>
    <?php endif; ?>

    <!-- Page numbers -->
    <?php foreach ($pagination['pages'] as $p): ?>
        <?php if ($p['is_current']): ?>
            <span class="active"><?= $p['page'] ?></span>
        <?php else: ?>
            <a href="?page=<?= $p['page'] ?>"><?= $p['page'] ?></a>
        <?php endif; ?>
    <?php endforeach; ?>

    <!-- Next -->
    <?php if ($pagination['has_next']): ?>
        <a href="?page=<?= $pagination['next_page'] ?>">Next</a>
    <?php else: ?>
        <span class="disabled">Next</span>
    <?php endif; ?>

</div>

</body>
</html>