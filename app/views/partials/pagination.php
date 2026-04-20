<?php
// $pagination được truyền từ controller:
// $pagination = $paginator->toArray();

if (!isset($pagination) || $pagination['total_pages'] <= 1) return;
?>

<div class="pagination">

    <!-- Prev -->
    <?php if ($pagination['has_prev']): ?>
        <a href="?page=<?= $pagination['prev_page'] ?>">«</a>
    <?php else: ?>
        <span class="disabled">«</span>
    <?php endif; ?>

    <!-- Page numbers -->
    <?php
$current = $pagination['current_page'];
$total = $pagination['total_pages'];

$range = 1; // mỗi bên 1 trang → tổng 3 trang

$start = max(1, $current - $range);
$end = min($total, $current + $range);
?>

<?php for ($i = $start; $i <= $end; $i++): ?>
    <?php if ($i == $current): ?>
        <span class="active"><?= $i ?></span>
    <?php else: ?>
        <a href="?page=<?= $i ?>"><?= $i ?></a>
    <?php endif; ?>
<?php endfor; ?>
        

    <!-- Next -->
    <?php if ($pagination['has_next']): ?>
        <a href="?page=<?= $pagination['next_page'] ?>">»</a>
    <?php else: ?>
        <span class="disabled">»</span>
    <?php endif; ?>

</div>
