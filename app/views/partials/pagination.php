<?php
//// Nếu chỉ có 1 trang thì không hiện phân trang
if (!isset($pagination) || $pagination['total_pages'] <= 1) return;
// Lấy các tham số filter hiện tại (như sort, search...) để khi bấm chuyển trang không bị mất filter
$queryParams = $_GET;
unset($queryParams['url']); // Xóa url để tránh bị lặp
?>

<div class="pagination">
    <div class="custom-pagination">
        
        <?php if ($pagination['has_prev']): ?>
            <?php $queryParams['page'] = $pagination['prev_page']; ?>
            <a href="?url=product/index&<?= http_build_query($queryParams) ?>" class="page-node prev">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        <?php else: ?>
            <span class="page-node disabled"><i class="fa-solid fa-chevron-left"></i></span>
        <?php endif; ?>

        <?php foreach ($pagination['pages'] as $p): ?>
            <?php 
                $queryParams['page'] = $p['page']; 
                $link = "?url=product/index&" . http_build_query($queryParams);
            ?>
            
            <?php if ($p['is_current']): ?>
                <span class="page-node active"><?= $p['page'] ?></span>
            <?php else: ?>
                <a href="<?= $link ?>" class="page-node"><?= $p['page'] ?></a>
            <?php endif; ?>
        <?php endforeach; ?>

        <?php if ($pagination['has_next']): ?>
            <?php $queryParams['page'] = $pagination['next_page']; ?>
            <a href="?url=product/index&<?= http_build_query($queryParams) ?>" class="page-node next">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        <?php else: ?>
            <span class="page-node disabled"><i class="fa-solid fa-chevron-right"></i></span>
        <?php endif; ?>
    </div>
</div>
